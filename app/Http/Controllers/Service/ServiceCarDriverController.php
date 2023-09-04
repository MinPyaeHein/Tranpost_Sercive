<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceCarDriverController extends Controller
{
    public function index()
    {
        return view ('admin.service.serviceCarDriverIndex');
    }

}
