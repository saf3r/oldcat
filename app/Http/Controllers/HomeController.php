<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function sidebar()
    {
        $status = (Cache::get('sidebar') == 1) ? 0 : 1;
        Cache::put('sidebar', $status);
    }
}
