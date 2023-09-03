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
         return view ('admin.service.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view ('admin.service.create');
    }

    
    public function store(Request $request)
    {
          return redirect('admin.services');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         return view('admin.service.show');
    }

   
    public function edit(string $id)
    {
         return view('admin.service.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return redirect('admin.services');
    }

    
    public function destroy(string $id)
    {
        return redirect('admin.services');
    }
}
