<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Mobile;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function show($id){
        $mobile = Customer::find($id)->mobile;
        return $mobile;
    }

    public function create()
    {
        $mobile = new Mobile();
        $mobile->model = 'realme 7';

        $customer = new Customer();
        $customer->name = 'jhon';
        $customer->email = 'jhon@gmail.com';

        $customer->save();
        $customer->mobile()->save($mobile);

        dd("saved");
    }
}
