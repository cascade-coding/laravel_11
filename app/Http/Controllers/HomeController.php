<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function index($locale = null)
    {
        if ($locale) {
            App::setlocale($locale);
        }
        return view('home');
    }
}
