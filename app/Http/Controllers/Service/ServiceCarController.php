<?php

namespace App\Http\Controllers\service;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ImageController;
use App\Models\ServiceCar;
use Illuminate\Http\Request;

class ServiceCarController extends Controller
{

    public function index()
    {
        $query = "SELECT * FROM service_cars where status='active'";
        $serviceCars = DB::select($query);
        $serviceCars = ServiceCar::all();
        return view('admin.service.serviceCarIndex', compact('serviceCars'));
    }

    public function create()
    {
        $query = "SELECT * FROM users where type='driver'";
        $drivers = DB::select($query);
        return view('admin.service.serviceCarCreate', compact('drivers'));
    }

    public function store(Request $request)
    {
        $name = $request->name;
        $car_no = $request->car_no;
        $size = $request->size;
        $price = $request->price;
        $service_type = $request->service_type;
        $desc = $request->desc;
        $driver_id = $request->driver_id;
        $short_desc = $request->short_desc;
        $new_img_name = ImageController::uploadImage($request, 'service_car');

        $query = "INSERT INTO service_cars(name, car_no, size, price, 
                 `desc`, driver_id, status,service_type,image_name,short_desc) VALUES (?, ?, ?, ?, ?, ?, ?,?,?,?)";
        DB::insert($query, [$name, $car_no, $size, $price, $desc, $driver_id, 'active', $service_type,$new_img_name,$short_desc]);

        return redirect()->route('serviceCars.index');
    }
}
