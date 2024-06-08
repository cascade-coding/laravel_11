<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('post');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $user = $request->user();

        $now = Carbon::now();

        DB::table('posts')->insert([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => $user->id,
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        return redirect(route('post_index'))->with('status', 'Post Added!');
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
    public function edit(Request $request, string $id)
    {
        $post = DB::table('posts')
            ->where("id", $id)
            ->where("user_id", $request->user()->id)
            ->first();

        // if (Gate::denies('isAdmin', $post)) {
        //     abort(403);
        // }

        if (!Gate::allows('isAdmin', $post)) {
            abort(403);
        }

        return view('editpost', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        DB::table('posts')
            ->where('id', $id)
            ->where('user_id', $request->user()->id)
            ->update([
                'title' => $request->title,
                'body' => $request->body,
            ]);

        return redirect(route('dashboard'))->with('status', 'Post Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {


        DB::table('posts')
            ->where('id', $id)
            ->where('user_id', $request->user()->id)
            ->delete();

        return redirect(route('dashboard'))->with('status', 'Post Deleted!');
    }
}
