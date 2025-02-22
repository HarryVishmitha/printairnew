<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserControl extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(\App\Http\Middleware\AdminMiddleware::class); // Use full middleware path
        if (Auth::check() && Auth::user()->account_type === 'admin') {
            return redirect()->route('admin.dashboard');
        }
    }
    public function index()
    {
        if (Auth::check() && Auth::user()->account_type === 'admin') {
            return redirect()->route('admin.dashboard');
        }
        return view('user.dashboard');
    }
}
