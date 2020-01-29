<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function list(){

        $customers = [
            'Andi',
            'Budi',
            'Rudi'
        ];

        return view('internals.customers', [
            'customers' => $customers
        ]);
    }
}
