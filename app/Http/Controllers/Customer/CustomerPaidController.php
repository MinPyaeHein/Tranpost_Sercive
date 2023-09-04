<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerPaidController extends Controller
{
    public function index()
    {  
        return view ('admin.customer.customerPaidIndex');
    }
}
