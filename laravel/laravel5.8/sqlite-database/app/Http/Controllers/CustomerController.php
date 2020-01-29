<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function lists(){

        $customers = Customer::all();

        

        return view('customer.index', [
            'customers' => $customers
        ]);
    }
}
