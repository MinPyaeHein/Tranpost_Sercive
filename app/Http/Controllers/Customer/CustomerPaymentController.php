<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerPaymentController extends Controller
{ public function index()
    {
        return view ('admin.customer.customerPaymentIndex');
    }
    public function edit(string $id)
    {
         return view('admin.customer.customerPaymentDetail');
    }
}
