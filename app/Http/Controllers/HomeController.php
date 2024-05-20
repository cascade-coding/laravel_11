<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $students = null;

        $students = DB::table('students')->paginate(4);
        
        // $students = DB::table('students')->simplePaginate(4);
        
        $students = DB::table('students')->orderBy('id')->cursorPaginate(4);

        // $students->withPath('/cs/students'); // ! define custom urls

        // dd($students);

        return view('welcome', ['students' => $students]);
    }
}
