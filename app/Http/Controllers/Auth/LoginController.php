<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;

class LoginController extends Controller
{
    use AuthenticatesUsers;

//    protected $redirectTo = RouteServiceProvider::HOME;

    protected function authenticated(\Illuminate\Http\Request $request, $user)
    {
        return Inertia::location('painel');

    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
