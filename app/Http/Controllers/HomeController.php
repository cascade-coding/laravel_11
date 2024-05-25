<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use Illuminate\Http\Request;

use App\Models\Employee;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Employee::orderBy('id', 'desc')->get();
        return view('home', ['employees' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(StoreEmployeeRequest $request)
    {
        $validated = $request->safe()->all();

        $request->flash();

        Employee::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'city' => $validated['city'],
        ]);

        return redirect(route('home'))->with('status', 'Employee record has been added!');
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

        $data = Employee::find($id);
        return view('edit_employee', ['employee' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreEmployeeRequest $request, string $id)
    {
        $validated = $request->safe()->all();

        $record = Employee::find($id);

        $record->name = $validated['name'];
        $record->email = $validated['email'];
        $record->city = $validated['city'];

        $record->save();

        return redirect(route('home'))->with('status', 'Record has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Employee::destroy($id);
        return redirect(route('home'))->with('status', 'Record has been deleted!');
    }
}
