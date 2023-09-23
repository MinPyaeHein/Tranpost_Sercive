@extends('layout.app')
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
          <h1>Customer Orders Detail</h1>
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
                    <label>Service Type (Accident and Salvage Vehicle Transport)</label><br>
                    <img src=" {{asset('storage/serviceTypeCar/car.png')}}" alt="Image" width="150" height="130">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Customer Name</label>
                    <input type="text" class="form-control" id="name" value="">
                   </div>
                   <div class="form-group">
                    <label>Conductions</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Vehicle Damage</option>
                      <option>Accidents</option>
                      <option>Weather Conditions</option>
                      <option>Environmental Impact</option>
                      <option>Security</option>
                    
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <textarea class="form-control" id="phone" rows='4'>I reside at 123 Main Street, Anytown, USA, 12345. You can reach me at this address for any correspondence or deliveries</textarea>
                  </div>
                  <div class="form-group">
                    <label>Status</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">In Progress</option>
                      <option>Cancelled</option>
                      <option>On Hold</option>
                      <option>Paid</option>
                      <option>Unresolved</option>
                    
                    </select>
                  </div>
                  
                  
                
                </div>
               
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Customer ID</label>
                        <input type="text" class="form-control" id="customerId" value="CID-3455">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Order ID</label>
                        <input type="text" class="form-control" id="orderId" value="OID-543">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="text" class="form-control" id="phone" value="0944534534">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kilometer</label>
                        <input type="text" class="form-control" id="phone" value="234 Kilometer">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Note</label>
                        <textarea class="form-control" id="phone" rows='4'>I am not the individual you may have observed standing by the black car while wearing a red shirt. Please direct any inquiries or information to the correct person. Thank you for your attention</textarea>
                    </div>
                   
                    <div class="form-group">
                        <label for="exampleInputEmail1">Total Service Fee</label>
                        <input type="text" class="form-control" id="extraPrice" value="4000 THB">
                    </div>
                    <div class="form-group">
                        <label>Type Of Carrier Service</label>
                        <select class="form-control select2" style="width: 100%;">
                          <option selected="selected">Accident and Salvage Vehicle Transport</option>
                          <option>Specialized Equipment Transport</option>
                          <option>Motorcycle and Recreational Vehicle Transport</option>
                          <option>Boat and Watercraft Transport</option>
                          <option>Utility Vehicle Transport</option>
                          <option>Emergency Recovery and Towing</option>

                        
                        </select>
                    </div>
                  <!-- /.form-group -->
                  
                  <!-- /.form-group -->
                </div>

                <div class="col-md-12">
                    <label for="exampleInputEmail1">Customer Upload Photo</label><br>
                    <img src=" {{asset('storage/orderdetail/accident1.jfif')}}" alt="Image" width="180" height="120">
                    <img src=" {{asset('storage/orderdetail/accident2.jfif')}}" alt="Image" width="180" height="120">
                    
                </div>

                <!-- /.col -->
              </div>
      
          <!-- /.row -->

          <!-- /.row -->
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-info">Update</button>
            <button type="submit" class="btn btn-default float-right">Cancel</button>
        </div>
      </div>
      <!-- /.card -->

     
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