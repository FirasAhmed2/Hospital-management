<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InputValidation
{
    public function handle(Request $request, Closure $next)
    {
        // XSS prevention - sanitize all input
        $input = $request->all();
        array_walk_recursive($input, function (&$value) {
            if (is_string($value)) {
                $value = strip_tags($value);
                $value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
            }
        });
        $request->replace($input);

        return $next($request);
    }
}