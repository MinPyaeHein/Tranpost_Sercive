<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerOrderController extends Controller
{
    public function index()
    {
        return view ('admin.customer.customerOrderIndex');
    }
    public function edit(string $id)
    {
         return view('admin.customer.customerOrderDetail');
    }
}
