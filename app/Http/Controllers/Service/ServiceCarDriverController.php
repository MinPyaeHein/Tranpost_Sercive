<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceCarDriverController extends Controller
{
    public function index()
    {
        $query = "SELECT * FROM users where type='driver'";
        $drivers = DB::select($query);
       
        return view('admin.service.serviceCarDriverIndex', compact('drivers'));
    }
    public function create()
    {
        return view('admin.service.serviceCarDriverCreate');
    }
    public function store(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $password = $request->password;
        $address = $request->address;
        $national_id = $request->national_id;
        $about = $request->about;
        $createdAt = now()->toDateTimeString();
        
        $query = "INSERT INTO users (name, email, phone, password,address,national_id ,note,remember_token,created_at,updated_at,status,type,about) VALUES (?, ?, ?, ?,?,?,?,?,?,?,?,?,?)";
        DB::insert($query, [$name, $email, $phone, $password, $address, $national_id, 'dfdfdf', null, $createdAt, null, 'Active','driver',$about]);

        return redirect()->route('serviceCarDrivers.index');
    }
}
