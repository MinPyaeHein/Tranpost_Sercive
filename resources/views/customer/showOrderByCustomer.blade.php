@extends('layout.appCus')
@section('title') Group Structure @endsection

@section('css-place')
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
<link rel="stylesheet" href="{{asset('dist/css/custom.css')}}">
@endsection
@section('contents')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Your Applied Order</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Orders</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <form action='{{route('editOrder')}}' method="post" enctype="multipart/form-data" id='regform'>
        @csrf
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Order Detail Form</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
          </div>
        </div>
      
        <!-- /.card-header -->
          <div class="card-body">
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Service Type ({{$order[0]->service_type}})</label><br>
                      <img src=" {{asset('storage/service_car/'.$order[0]->c_img)}}" alt="Image" width="150" height="130">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Customer Name</label>
                      <input type="text" class="form-control" id="name" value="{{$order[0]->name}}" name="name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Driver ID</label>
                      <input type="text" class="form-control" id="orderId" value="DID-{{$order[0]->driver_id}}" name="order_id">
                    </div>
                    <div class="form-group">
                      <label>Conductions</label>
                      <input type="text" class="form-control" id="name" value="{{$order[0]->conduction}}" name="conduction">
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Status</label>
                      <select class="form-control select2" style="width: 100%;" name="status">
                        <option selected="selected">{{$order[0]->status}}</option>
                        <option>Cancelled</option>
                        <option>Finished</option>
                        <option>Waitting</option>
                      
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Address</label>
                      <textarea class="form-control" id="phone" rows='4' name="address">{{$order[0]->address}}</textarea>
                    </div>
                    
                    
                    
                  
                  </div>
                
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Customer ID</label>
                          <input type="text" class="form-control" id="customerId" value="CID-{{$order[0]->user_id}}" name="cus_id">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Order ID</label>
                          <input type="text" class="form-control" id="orderId" value="OID-{{$order[0]->id}}" name="order_id">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Phone</label>
                          <input type="text" class="form-control" id="phone" value="{{$order[0]->phone}}" name="phone">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Kilometer Per price</label>
                          <input type="text" class="form-control" id="price" value="{{$order[0]->price}}" name="price">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Service Car Type</label>
                        <input type="text" class="form-control" id="extraPrice" value="{{$order[0]->car_name}}" name="service_type">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Service Time</label>
                        <input type="text" class="form-control" id="extraPrice" value="{{$order[0]->time}}" name="service_type">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Note</label>
                          <textarea class="form-control" id="phone" rows='4'>{{$order[0]->note}}</textarea>
                      </div>
                    
                    
                    
                    <!-- /.form-group -->
                    
                    <!-- /.form-group -->
                  </div>

              

                  <!-- /.col -->
                </div>
        
            <!-- /.row -->

            <!-- /.row -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
              <a href="{{route('customerHome.index')}}"  class="btn btn-info">Exit</a>
              
          </div>
        </div>
      <!-- /.card -->
      </form>
     
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>


@section('js-place')
<script>
 $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
 

  
</script>
@endsection
@endsection