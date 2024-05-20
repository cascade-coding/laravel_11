<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Collection;


class HomeController extends Controller
{
    public function index()
    {
        $students = null;
        // ! retreive all data
        // $students = DB::table('students')->get();
        // dd($students);

        // ! Retrieving a Single Row and with where clause
        // $student = DB::table('students')->first();
        // $student = DB::table('students')->where('name', 'David')->first();
        // ! get a single column of a row
        // $student = DB::table('students')->where('name', 'David')->value('name');
        // ! find data using id
        // $student = DB::table('students')->find(1);
        // dd($student);

        // ! with where clause 
        // $students = DB::table('students')->where('subject', 'Physics')->get();
        // dd($students);

        // ! Retrieving a List of Column Values
        // $students = DB::table('students')->pluck('name');
        // $students = DB::table('students')->pluck('subject', 'name');
        // dd($students);

        // ! Chunking Results
        // DB::table('students')->orderBy('id')->chunk(2, function (Collection $students) {
        //     echo "chuck data <br>";
        //     print_r($students);
        //     echo "<br>";

        //     // ! to stop the chunk after the first round
        //     // return false;
        // });

        // ! Aggregates methods like count, max, min, avg, and sum.
        // $total = DB::table('students')->count();
        // dd($total);

        // ! Determining if Records Exist
        // if (DB::table('students')->where('id', 1)->exists()) {
        //     dd("data exists");
        // }

        // if (DB::table('students')->where('id', 10)->doesntExist()) {
        //     dd("data doesn't exists");
        // }

        // ! select method
        // $students = DB::table('students')->select('name as Student Name', 'subject')->get();
        // dd($students);

        // ! distinct method
        // $students = DB::table('students')->distinct()->get();
        // dd($students);

        // ! where caluse
        // $data = DB::table('students')->where('subject', 'Physics')->get();
        // $data = DB::table('students')->where('id', '=', 1)->get();
        // $data = DB::table('students')->where('id', 1)->get();
        // $data = DB::table('students')->where('id', '>', 2)->get();

        // ! orWhere clause
        // $data = DB::table('students')->where('id', '=', 199)->orWhere('name', 'David')->get();
        // dd($data);

        // ! whereBetween clause
        // $data = DB::table('students')->whereBetween('id', [1, 4])->get();
        // dd($data);

        // ! orWhereBetween clause
        // $data = DB::table('students')->whereBetween('age', [20, 28])->orWhereBetween('id', [1, 4])->get();
        // dd($data);

        // ! whereDate clause
        // $data = DB::table('students')->whereDate('joined', '2024-02-12')->get();
        // dd($data);

        // ! whereDate clause
        // $data = DB::table('students')->whereMonth('joined', '02')->get();
        // dd($data);

        // ! whereDay clause
        // $data = DB::table('students')->whereDay('joined', '07')->get();
        // dd($data);

        // ! whereYear clause
        // $data = DB::table('students')->whereYear('joined', '2023')->get();
        // dd($data);

        // ! orderBy method
        // $data = DB::table('students')->orderBy('age')->get();
        // $data = DB::table('students')->orderBy('age', 'desc')->get();
        // dd($data);

        // ! latest and oldest
        // $data = DB::table('students')->latest('joined')->get();
        // $data = DB::table('students')->latest('joined')->first();
        // $data = DB::table('students')->oldest('joined')->first();
        // dd($data);

        // ! random ordering 
        // $data = DB::table('students')->inRandomOrder()->first();
        // $data = DB::table('students')->inRandomOrder()->get();
        // dd($data);

        // ! grouping 
        // * if error shows up change the strict mode to true in config/database.php
        // $data = DB::table('students')->groupBy('age')->having('age', '>', 24)->get();
        // dd($data);

        // ! Limit and Offset 
        // $data = DB::table('students')->take(2)->get();
        // $data = DB::table('students')->skip(2)->take(4)->get();

        // $data = DB::table('students')->limit(3)->get();

        // $data = DB::table('students')->offset(2)->limit(4)->get();
        // dd($data);

        // ! ********* INSERT statement ************
        // $data = DB::table('students')->insert([
        //     'name' => 'Robert',
        //     'subject' => 'Math',
        //     'age' => 22,
        // ]);

        // $data = DB::table('students')->insert([
        //     [
        //         'name' => 'James',
        //         'subject' => 'Math',
        //         'age' => 21,
        //     ],
        //     [
        //         'name' => 'Todd',
        //         'subject' => 'Math',
        //         'age' => 25,
        //     ]
        // ]);

        // $data = DB::table('students')->insertOrIgnore([
        //     'id' => 14,
        //     'name' => 'Ben',
        //     'subject' => 'Math',
        //     'age' => 21,

        // ]);

        // $data = DB::table('students')->insertGetId([
        //     'id' => 15,
        //     'name' => 'Jerry',
        //     'subject' => 'Math',
        //     'age' => 21,
        // ]);
        // dd($data);

        // ! ********* Update statement ************
        // $affected = DB::table('students')->where('id', 1)->update(['subject' => 'Math']);
        // dd($affected);
        // $data = DB::table('students')->updateOrInsert(
        //     [
        //         'name' => 'Phill', 'subject' => 'Math'
        //     ],
        //     ['subject' => 'Biology']
        // );
        // dd($data);
        

        // ! ********* Delete statement ************
        $data = DB::table('students')->where('id', '=', 1)->delete();
        // $data = DB::table('students')->truncate();
        dd($data);

        return view('welcome', ['students' => $students]);
    }
}
