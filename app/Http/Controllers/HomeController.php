<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function show(Request $request)
    {
        $posts = DB::table('posts')->simplePaginate(5);
        return view('welcome', ['posts' => $posts]);
    }
}
