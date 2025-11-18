<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MediCare Hospital - Quality Healthcare Services</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    
    <!-- Styles -->
    <style>
        .hero-bg {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');
            background-size: cover;
            background-position: center;
        }
        .feature-icon {
            background-color: #e3f2fd;
        }
    </style>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center">
                    <div class="bg-blue-600 text-white p-2 rounded-lg">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21l-7-5-7 5V5a2 2 0 012-2h10a2 2 0 012 2v16z"/>
                        </svg>
                    </div>
                    <div class="ml-3 text-2xl font-bold text-gray-800">MediCare Hospital</div>
                </div>
                
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="text-blue-600 font-semibold">Dashboard</a>
                    <a href="#services" class="text-gray-600 hover:text-blue-600">Services</a>
                    <a href="#doctors" class="text-gray-600 hover:text-blue-600">Doctors</a>
                    <a href="#about" class="text-gray-600 hover:text-blue-600">About</a>
                    <a href="#contact" class="text-gray-600 hover:text-blue-600">Contact</a>
                    
                    @if (Route::has('login'))
                        <div class="flex items-center space-x-4">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-gray-600 hover:text-blue-600">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="text-gray-600 hover:text-blue-600">Login</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-bg text-white py-20">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h1 class="text-5xl font-bold mb-6">Quality Healthcare When You Need It Most</h1>
            <p class="text-xl mb-8 max-w-3xl mx-auto">24/7 emergency services, specialized medical care, and compassionate healthcare professionals dedicated to your well-being.</p>
            <div class="space-x-4">
                <a href="#contact" class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 font-semibold">Book Appointment</a>
                <a href="#services" class="bg-white text-blue-600 px-8 py-3 rounded-lg hover:bg-gray-100 font-semibold">Our Services</a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Our Medical Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Emergency Care -->
                <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                    <div class="feature-icon w-16 h-16 rounded-full flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Emergency Care</h3>
                    <p class="text-gray-600">24/7 emergency services with state-of-the-art facilities and experienced trauma specialists.</p>
                </div>

                <!-- Cardiology -->
                <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                    <div class="feature-icon w-16 h-16 rounded-full flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Cardiology</h3>
                    <p class="text-gray-600">Comprehensive heart care with advanced diagnostic tools and interventional procedures.</p>
                </div>

                <!-- Pediatrics -->
                <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                    <div class="feature-icon w-16 h-16 rounded-full flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Pediatrics</h3>
                    <p class="text-gray-600">Specialized care for children of all ages with child-friendly environment and expert pediatricians.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Doctors Section -->
    <section id="doctors" class="py-16">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Meet Our Specialists</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                @foreach([
                    ['name' => 'Dr. Sarah Johnson', 'specialty' => 'Cardiologist', 'exp' => '15 years'],
                    ['name' => 'Dr. Michael Chen', 'specialty' => 'Neurologist', 'exp' => '12 years'],
                    ['name' => 'Dr. Emily Davis', 'specialty' => 'Pediatrician', 'exp' => '10 years'],
                    ['name' => 'Dr. Robert Wilson', 'specialty' => 'Orthopedic Surgeon', 'exp' => '18 years']
                ] as $doctor)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="h-48 bg-gray-200 flex items-center justify-center">
                        <svg class="w-20 h-20 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg">{{ $doctor['name'] }}</h3>
                        <p class="text-blue-600 text-sm">{{ $doctor['specialty'] }}</p>
                        <p class="text-gray-500 text-sm mt-2">{{ $doctor['exp'] }} experience</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12">Contact Us</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-2xl font-semibold mb-6">Get In Touch</h3>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 mr-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span>123 Healthcare Ave, Medical City, MC 12345</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 mr-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <span>(555) 123-HELP</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 mr-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <span>info@medicare-hospital.com</span>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="text-2xl font-semibold mb-6">Emergency Contact</h3>
                    <div class="bg-red-600 p-6 rounded-lg">
                        <div class="flex items-center mb-4">
                            <svg class="w-8 h-8 mr-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                            </svg>
                            <span class="text-xl font-bold">24/7 Emergency Line</span>
                        </div>
                        <p class="text-2xl font-bold">(555) 911-HELP</p>
                        <p class="mt-2">Immediate medical assistance available round the clock</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p>&copy; 2024 MediCare Hospital. All rights reserved.</p>
            <p class="mt-2 text-gray-400">Providing quality healthcare since 1985</p>
        </div>
    </footer>
</body>
</html>