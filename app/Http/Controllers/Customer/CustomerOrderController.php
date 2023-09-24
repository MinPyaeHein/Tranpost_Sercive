<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerOrderController extends Controller
{
    public function index()
    {
        $query = "SELECT * FROM orders o,service_cars c where o.car_id=c.id and o.status='Waiting'";
        $orders = DB::select($query);
        // dd($orders);
        return view('admin.customer.customerOrderIndex', compact('orders'));
    }
    public function edit(string $id)
    {
        return view('admin.customer.customerOrderDetail');
    }
}
