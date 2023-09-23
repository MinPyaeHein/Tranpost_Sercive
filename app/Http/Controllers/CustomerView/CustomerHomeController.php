<?php

namespace App\Http\Controllers\CustomerView;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerHomeController extends Controller
{
    public function index()
    {
        return view('customer.customerHome');
    }
    public function edit(string $id)
    {
        return view('customer.customerHomeDetail');
    }
    public function orderDetail(string $id)
    {
        return view('customer.orderConfrim');
    }
    public function orderConfrim(Request $request)
    {

        $address = $request->address;
        $time = $request->time;
        $phone = $request->phone;
        $desc = $request->desc;
        $conduction = $request->conduction;
        $createdAt = now()->toDateTimeString();
        $query = "INSERT INTO orders (time, address, status, phone, `desc`,user_id,car_id,created_at,updated_at,conduction) VALUES (?, ?, ?, ?,?,?,?,?,?,?)";
        DB::insert($query, [$time, $address, 'Waiting', $phone, $desc, 1, 1, $createdAt, null, $conduction]);

        return view('customer.cusOrderConfrim');
    }
    public function create()
    {
        return view('customer.customerRegister');
    }

    public function store(Request $request)
    {
        //  dd("Arrive Store");
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $password = $request->password;
        $address = $request->address;
        $national_id = $request->national_id;
        $note = $request->note;
        $createdAt = now()->toDateTimeString();
        $query = "INSERT INTO users (name, email, phone, password,address,national_id ,note,remember_token,created_at,updated_at,status,type) VALUES (?, ?, ?, ?,?,?,?,?,?,?,?,?)";
        DB::insert($query, [$name, $email, $phone, $password, $address, $national_id, $note, null, $createdAt, null, 'Active', 'customer']);

        return redirect()->route('customerHome.index');
    }
}
