<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ImageController;
use App\Models\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function home()
    {      
        return view('admin.home');
    }
    public function index()
    {
        $query = "SELECT * FROM users where type='admin'";
        $users = DB::select($query);
        return view('admin.index', compact('users'));
    }
    public function create()
    {
        return view('admin.create');
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
        $new_img_name = ImageController::uploadImage($request, 'admins');
        $query = "INSERT INTO users (name, email, phone, password,address,national_id ,note,remember_token,created_at,updated_at,status,type,image_name) VALUES (?, ?, ?, ?,?,?,?,?,?,?,?,?,?)";
        DB::insert($query, [$name, $email, $phone, $hashedPassword, $address, $national_id, $note, null, $createdAt, null, 'Active','admin',$new_img_name]);

        return redirect()->route('admins.index');
    }

    public function roles()
    {
        return view('admin.roles');
    }
   
}
