<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerOrderHistoryController extends Controller
{
    public function index()
    {
        return view ('admin.customer.customerOrderHistoryIndex');
    }
}
