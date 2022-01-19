<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        Inertia::setRootView('app');
        return Inertia::render('home/index');
    }

    public function login()
    {
        Inertia::setRootView('auth');
        return Inertia::render('auth/login');
    }

    public function register()
    {
        Inertia::setRootView('auth');
        return Inertia::render('auth/register');
    }
}
