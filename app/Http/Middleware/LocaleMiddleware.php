<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Stevebauman\Location\Facades\Location;

class LocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (session()->has('locale')) {
            App::setLocale(session('locale'));
        } else {
            $ip = file_get_contents('https://api.ipify.org');
            $location = Location::get($ip);
    
            if ($location) {
                $countryCode = $location->countryCode;
                $locale = $this->getLocaleForCountry($countryCode);
                App::setLocale($locale);
                session(['locale' => $locale]);
            }
        }
    
        return $next($request);
    }
    private function getLocaleForCountry($countryCode)
    {
        $countryLocales = [
            'US' => 'en',  // English for the United States
            'IN' => 'hi',  // Hindi for India
            'DE' => 'de',  // German for Germany
            'FR' => 'fr',  // French for France
        ];
        
        return $countryLocales[$countryCode] ?? 'en';
    }
}
