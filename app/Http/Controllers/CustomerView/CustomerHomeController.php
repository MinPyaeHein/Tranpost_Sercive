<?php

namespace App\Http\Controllers\CustomerView;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ImageController;
use Illuminate\Http\Request;

class CustomerHomeController extends Controller
{
    public function index()
    {
        $query = "SELECT * FROM service_cars";
        $cars = DB::select($query);
        return view('customer.customerHome', compact('cars'));
    }
    public function edit(string $id)
    {
        $query = "SELECT * FROM service_cars where id=?";
        $car = DB::select($query, [$id]);
        return view('customer.customerHomeDetail', compact('car'));
    }
    public function orderDetail(string $id)
    {
        $query = "SELECT * FROM service_cars where id=?";
        $car = DB::select($query, [$id]);
        return view('customer.orderConfrim', compact('car'));
    }
    public function orderConfrim(Request $request)
    {
        $cus_id = $request->cus_id;
        $car_id = $request->car_id;
        $name = $request->name;
        $address = $request->address;
        $time = $request->time;
        $phone = $request->phone;
        $desc = $request->desc;
        $conduction = $request->conduction;
        $createdAt = now()->toDateTimeString();
        $query = "INSERT INTO orders (time, address, status, phone, `desc`, user_id, car_id, created_at, updated_at, conduction) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        DB::insert($query, [$time, $address, 'Waiting', $phone, $desc, $cus_id, $car_id, $createdAt, null, $conduction]);

        $query = "SELECT * FROM orders ORDER BY id DESC LIMIT 1;";
        $order = DB::select($query);
        $ord_id = $order[0]->id;
        // $query = "SELECT * FROM service_cars where id=?";
        // 
        //  dd($ord_id);
        // $car = DB::select($query, [$ord_id]);
        // dd($car);

        $query = "SELECT c.* FROM orders o,service_cars c where o.id=? AND o.car_id=c.id";
        $query_driver = "SELECT d.* FROM orders o,service_cars c,users d where o.id=? AND o.car_id=c.id and c.driver_id=d.id";

        $car = DB::select($query, [$ord_id]);
        $driver = DB::select($query_driver, [$ord_id]);
       // dd($driver);

        return view('customer.OrderConfrimResult', compact(['car', 'order', 'driver']));
    }
    public function create()
    {
        return view('customer.customerRegister');
    }

    public function store(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $hashedPassword = bcrypt($request->password);
        $address = $request->address;
        $national_id = $request->national_id;
        $note = $request->note;
        $createdAt = now()->toDateTimeString();
        $new_img_name = ImageController::uploadImage($request, 'customers');
        $query = "INSERT INTO users (name, email, phone, password,address,national_id ,note,remember_token,created_at,updated_at,status,type,image_name) VALUES (?, ?, ?, ?,?,?,?,?,?,?,?,?,?)";
        DB::insert($query, [$name, $email, $phone, $hashedPassword, $address, $national_id, $note, null, $createdAt, null, 'Active', 'customer', $new_img_name]);
        return redirect()->route('customerHome.index');
    }
}
