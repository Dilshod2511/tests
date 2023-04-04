<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class LogoutController extends Controller
{
    public function logout(): Redirector|Application|RedirectResponse
    {
        auth()->logout();
        return redirect('/');
    }
}
