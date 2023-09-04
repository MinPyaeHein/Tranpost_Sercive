<?php

namespace App\Http\Controllers\CustomerView;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerHomeController extends Controller
{
    public function index()
    {
        return view ('customer.customerHome');
    }
    public function edit(string $id)
    {
         return view('customer.customerHomeDetail');
    }
    public function orderDetail(string $id)
    {
         return view('customer.customerOrder');
    }
}
