<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show($id)
    {
        $customer = Customer::find($id);
        // dd($customer->name);
        // dd($customer->mobile);
        dd($customer->mobile->model);
    }
}
