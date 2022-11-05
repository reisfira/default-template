<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        if (auth()->guest()) {
            return redirect()->url('login');
        }

        return view('home');
    }
}
