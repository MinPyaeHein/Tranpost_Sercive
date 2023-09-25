<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerOrderController extends Controller
{
    public function index()
    {
        $query = "SELECT o.id as o_id, o.user_id as u_id, o.*, c.*,o.status as o_status
        FROM orders o
        JOIN service_cars c ON o.car_id = c.id where o.status!='inactive'
        ORDER BY o.created_at ASC";
        $orders = DB::select($query);
        return view('admin.customer.customerOrderIndex', compact('orders'));
    }
    public function edit(string $id)
    {
        $query = "SELECT c.*,s.*,c.image_name as c_img,c.name as car_name,o.* FROM orders o,service_cars c,users s where o.car_id=c.id and o.user_id=s.id and o.id='$id'";
        $order = DB::select($query);
        return view('admin.customer.customerOrderDetail', compact('order'));
    }
    public function editOrder(Request $request)
    {


        $o_id = $request->o_id;
        $name = $request->name;
        $status = $request->status;
        $address = $request->address;
        $time = $request->time;
        $phone = $request->phone;
        $desc = ' customer order updated';
        $conduction = $request->conduction;
        $createdAt = now()->toDateTimeString();

        // Prepare the raw SQL query
        $query = "UPDATE orders SET
        time = ?,
        address = ?,
        status = ?,
        phone = ?,
        `desc` = ?,
        created_at = ?,
        updated_at = NULL,
        conduction = ?
        WHERE  id = ?";

        // Execute the raw SQL query with bindings
        DB::update($query, [
            $time,
            $address,
            $status,
            $phone,
            $desc,
            $createdAt,
            $conduction,
            $o_id,
        ]);

        $query = "SELECT c.*,s.*,c.image_name as c_img,c.name as car_name,o.* FROM orders o,service_cars c,users s where o.car_id=c.id and o.user_id=s.id and o.id='$o_id'";
        $order = DB::select($query);
        return view('admin.customer.customerOrderDetail', compact('order'));
    }
    public function destroyCustomerOrder(string $o_id)
    {

        $query = "UPDATE orders SET
        status = 'inactive'
        WHERE id = ?";
        DB::update($query, [$o_id]);
        $query = "SELECT c.*,s.*,c.image_name as c_img,c.name as car_name,o.* FROM orders o,service_cars c,users s where o.car_id=c.id and o.user_id=s.id and o.id='$o_id'";
        $order = DB::select($query);
        return redirect()->route('customerOrder.index');
    }
}
