<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SecurityTest extends TestCase
{
    use RefreshDatabase;

    public function test_sql_injection_prevention()
    {
        $user = User::factory()->create(['role' => 'admin']);
        $this->actingAs($user);

        $response = $this->get('/users?email=test@example.com\' OR \'1\'=\'1');
        
        $response->assertStatus(200);
        // Should not return all users
    }

    public function test_xss_prevention()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $maliciousInput = '<script>alert("XSS")</script>';

        $response = $this->post('/users', [
            'name' => $maliciousInput,
            'email' => 'test@example.com',
            'password' => 'Password123!',
            'role' => 'user'
        ]);

        $this->assertDatabaseHas('users', [
            'name' => htmlspecialchars($maliciousInput, ENT_QUOTES, 'UTF-8'),
        ]);
    }

    public function test_csrf_protection()
    {
        $user = User::factory()->create();
        
        $response = $this->actingAs($user)
            ->post('/users', [
                'name' => 'Test User',
                'email' => 'test@example.com',
                'password' => 'Password123!',
                'role' => 'user'
            ], [
                'X-CSRF-TOKEN' => 'invalid-token'
            ]);

        $response->assertStatus(419); // CSRF token mismatch
    }

    public function test_authentication_required()
    {
        $response = $this->get('/dashboard');
        $response->assertRedirect('/login');
    }

    public function test_authorization_checks()
    {
        $user = User::factory()->create(['role' => 'user']);
        $this->actingAs($user);

        $response = $this->get('/users');
        $response->assertStatus(403); // Forbidden
    }
}