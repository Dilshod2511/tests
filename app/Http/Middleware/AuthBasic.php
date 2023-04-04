<?php

namespace App\Http\Middleware;

use App\Exceptions\UnAuthException;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Facades\Config;
use Illuminate\Validation\UnauthorizedException;

class AuthBasic
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $configLogin = Config::get('vat.admin');
        $configKey = Config::get('vat.password');

        $authorization = $request->header('authorization');

        if ($authorization && 0 === stripos($authorization, 'basic ')) {
            $exploded = explode(':', base64_decode(substr($authorization, 6)), 2);

            if (2 == count($exploded)) {
                list($login, $key) = $exploded;

                if ($login === $configLogin && $key === $configKey) {
                    return $next($request);
                }
            }
        }

        throw new UnAuthException('INVALID_AUTH', 401);

    }
}
