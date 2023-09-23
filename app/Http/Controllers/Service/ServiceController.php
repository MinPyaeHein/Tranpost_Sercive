<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  
    public function index()
    {     $query = "SELECT * FROM users where type='driver'";
          $drivers = DB::select($query);
          return view ('admin.service.serviceIndex', compact('drivers'));
    }

    public function edit(string $id)
    {
         return view('admin.service.serviceDetail');
    }
}
