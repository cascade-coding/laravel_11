<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $collection = collect(['First', 'Second', 'Third']);
        $collection = collect([10, 14, 22, 30, 50, 87, 44, 100]);

        // $data = $collection->all();
        // $data = $collection->average();
        // $data = $collection->sum();
        // $data = $collection->max();
        // $data = $collection->min();
        // $data = $collection->chunk(2);
        // $data = $collection->chunk(2)->all();
        // $data = $collection->reverse();
        $data = $collection->map(function ($item, $key) {
            return $item + 10;
        })->all();
        $data = $collection->count();

        // dd($collection);
        dd($data);
    }
}
