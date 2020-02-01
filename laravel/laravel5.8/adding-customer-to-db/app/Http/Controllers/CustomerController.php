<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function lists(){

        $customers = Customer::all();

        return view('customer', [
            'customers' => $customers
        ]);
    }

    public function save(){

        $customer = new Customer();
        $customer->name = request('name');
        $customer->save();

        return back();
    }
}
