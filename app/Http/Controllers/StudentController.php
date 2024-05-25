<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $data = [];
        // $data = Student::all();
        // $data = Student::where('city', 'Port Tyrel')->orderBy('name')->get();

        // ! chunking results
        // Student::chunk(10, function ($students) {
        //     echo "chunk... <br/>";
        //     foreach ($students as $student) {
        //         echo "{$student->name} <br/>";
        //     }
        // });

        // $data = Student::find(120);
        // dd($data);

        // $data = Student::where('city', 'New Janet')->first();
        // $data = Student::firstWhere('city', 'New Janet');
        // dd($data);

        // ! Retrieving Single Models / Aggregates
        // $data = Student::where('marks', '=', 80)->firstOr(function () {
        //     dd("couldn't find anything!");
        // });
        // dd($data);

        // ! Retrieving or Creating Models
        // $data = Student::firstOrCreate(
        //     ['name' => 'Annetta Hane']
        // );

        // $data = Student::firstOrCreate(
        //     ['name' => 'Stark'],
        //     ['email' => 'stark@gamil.com', 'city' => 'New York', 'marks' => 70],
        // );

        // $data = Student::firstOrNew(
        //     ['name' => 'Rock'],
        //     ['email' => 'rock@gamil.com', 'city' => 'New York', 'marks' => 70],
        // );

        // * to save the instance
        // $data->save();

        // dd($data);

        // ! Retrieving Aggregates
        // $data = Student::where('city', 'New Janet')->count();
        // $data = Student::where('city', 'New Janet')->max('marks');
        // dd($data);


        // ! insert data
        // * using the instance
        // $student = new Student();

        // $student->name = 'Kurt';
        // $student->email = 'kurt@gmail.com';
        // $student->city = 'New York';
        // $student->marks = 66;

        // $student->save();

        // * using the create method
        // $student = Student::create([
        //     'name' => 'Jerry',
        //     'email' => 'jerry@gmail.com',
        //     'city' => 'New York',
        //     'marks' => 88,
        // ]);
        // dd($student);

        // ! update data
        // $record = Student::where('name', 'Jerry')->first();

        // $record->name = 'Jerry Smith';
        // $record->city = 'LA';

        // $record->save();
        // dd($record);


        // ! mass update
        // $data = Student::where('city', 'New Janet')->update(['city' => 'New York']);
        // dd($data);

        // ! update or create
        // $data = Student::updateOrCreate(
        //     ['name' => 'Tom'],
        //     ['email' => 'tom@gmail.com', 'city' => 'New York', 'marks' => 88]
        // );

        // dd($data);


        // ! delete
        // $record = Student::find(140);
        // $record->delete();

        // Student::destroy(144, 145);

        // $data = Student::where('city', 'Port Alyson')->delete();
        // dd($data);

        // * delete all data from the table
        // Student::truncate();
        return view('welcome', ['students' => $data]);
    }
}
