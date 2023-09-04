<?php

namespace App\Http\Controllers\service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceTypeMatchController extends Controller
{
     public function index()
    {   
        return view ('admin.service.serviceTypeMatchIndex');
    }

 
}
