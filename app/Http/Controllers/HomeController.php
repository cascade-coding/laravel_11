<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $students = null;
        // ! fetching data
        // $students = DB::select("SELECT * FROM students");
        // $students = DB::select("SELECT * FROM students WHERE subject = ?", ['Math']);
        // $students = DB::select("SELECT * FROM students WHERE subject = :subject", ['subject' => 'Math']);
        // dd($students);

        // ! inserting data
        // $result = DB::insert("INSERT INTO students (name, subject) VALUES (?, ?)", ["Mark", "Math"]);
        // $result = DB::insert("INSERT INTO students (name, subject) VALUES (:name, :subject)", ["name" => "Nick", "subject" => "Math"]);
        // dd($result);

        // ! update data
        // $affected = DB::update("UPDATE students VALUE SET subject = ? WHERE id = ?", ["Physics", 5]);
        // $affected = DB::update("UPDATE students VALUE SET subject = :subject WHERE id = :id", ["subject" => "Physics", "id" => 4]);
        // dd($affected);

        // ! delete data
        // $deleted = DB::delete("DELETE FROM students WHERE id = ?", [2]);
        // $deleted = DB::delete("DELETE FROM students WHERE id = :id", ["id"=>2]);
        // dd($deleted);

        // ! using database transaction 
        // DB::transaction(function () {
        //     DB::update("UPDATE students SET subject = ? WHERE id = ?", ["Physics", 1]);
        //     DB::delete("DELETE FROM students WHERE id = :id", ["id" => 6]);
        // });
        return view('welcome', ['students' => $students]);
    }
}
