<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        $query = "SELECT * FROM users where type='customer'";
        $users = DB::select($query);
        return view('admin.customer.customerIndex', compact('users'));
    }
    public function destroy(string $id)
    {
        //  dd("Arrive Delete");
        $query = "delete FROM users where id='$id'";
        $users = DB::select($query);
        return redirect()->route('customers.index');
    }
}
