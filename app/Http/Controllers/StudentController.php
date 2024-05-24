<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Requests\StoreStudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = DB::table('students')->get();
        return view('home', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(StoreStudentRequest $request)
    {
        $validated = $request->safe()->all();

        $request->flash();

        $res = DB::table('students')->insert([
            'name' => $validated['name'],
            'city' => $validated['city'],
            'roll' => $validated['roll'],
        ]);

        $request->flashExcept(['name', 'city', 'roll']);

        return redirect(route('index'))->with('status', 'Student added!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = DB::table('students')->find($id);
        return view('edit_student', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreStudentRequest $request, string $id)
    {
        $validated = $request->safe()->all();

        DB::table('students')->where('id', $id)->update([
            'name' => $validated['name'],
            'city' => $validated['city'],
            'roll' => $validated['roll'],
        ]);

        return redirect(route('index'))->with('status', 'Student Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('students')->where('id', $id)->delete();
        return redirect(route('index'))->with('status', 'Student Deleted!');
    }
}
