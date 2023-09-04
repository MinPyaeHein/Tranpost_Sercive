<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return view ('admin.service.serviceIndex');
    }

    public function edit(string $id)
    {
         return view('admin.service.serviceDetail');
    }
}
