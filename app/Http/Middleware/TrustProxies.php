<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Http\Middleware\TrustProxies as Middleware;
use Symfony\Component\HttpFoundation\Request as SymfonyRequest;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
     * @var array|string|null
     */
    protected $proxies = '*'; // You can specify the IPs of trusted proxies instead of '*'

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
    protected $headers = SymfonyRequest::HEADER_X_FORWARDED_ALL; // Use all X-Forwarded headers by default

    /**
     * Override the default proxy detection behavior.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Request
     */
    public function handle(Request $request, \Closure $next)
    {
        // Set the trusted proxies and the headers that should be used to detect them
        $this->proxies = env('TRUSTED_PROXIES', '*'); // You can set the proxies via an environment variable
        $this->headers = SymfonyRequest::HEADER_X_FORWARDED_ALL; // Optionally, configure the headers used to detect proxies

        // Add more validation logic or processing if needed
        return parent::handle($request, $next);
    }
}
