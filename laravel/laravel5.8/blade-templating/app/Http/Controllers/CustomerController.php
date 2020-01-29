<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function list(){

        $customers = [
            'andi',
            'rudi',
            'budi'
        ];

        return view('customers', [
            'customers' => $customers
        ]);
    }
}
