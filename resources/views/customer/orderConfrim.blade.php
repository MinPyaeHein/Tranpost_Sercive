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
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Aplided Order Detail</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
          </div>
        </div>
        <!-- /.card-header -->
        <form action='{{route('customer.orderConfrim')}}' method="post" enctype="multipart/form-data" id='regform'>
          @csrf
          <div class="card-body">
              <div class="row">
                  <div class="col-md-6">
                
                    <div class="form-group">
                      <label for="exampleInputEmail1">Customer Name</label>
                      <input type="text" class="form-control" id="name" name="name" >
                    </div>
                    <div class="form-group">
                      <label>Conductions</label>
                      <select class="form-control select2" style="width: 100%;" name="conduction">
                        <option selected="selected">Vehicle Damage</option>
                        <option>Accidents</option>
                        <option>Weather Conditions</option>
                        <option>Environmental Impact</option>
                        <option>Security</option>
                      
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Waiting time</label>
                      <select class="form-control select2" style="width: 100%;" name="time">
                        <option value="1:00 AM">1:00 AM</option>
                        <option value="2:00 AM">2:00 AM</option>
                        <option value="3:00 AM">3:00 AM</option>
                        <option value="4:00 AM">4:00 AM</option>
                        <option value="5:00 AM">5:00 AM</option>
                        <option value="6:00 AM">6:00 AM</option>
                        <option value="7:00 AM">7:00 AM</option>
                        <option value="8:00 AM">8:00 AM</option>
                        <option value="9:00 AM">9:00 AM</option>
                        <option value="10:00 AM">10:00 AM</option>
                        <option value="11:00 AM">11:00 AM</option>
                        <option value="12:00 PM">12:00 PM</option>
                        <option value="1:00 PM">1:00 PM</option>
                        <option value="2:00 PM">2:00 PM</option>
                        <option value="3:00 PM">3:00 PM</option>
                        <option value="4:00 PM">4:00 PM</option>
                        <option value="5:00 PM">5:00 PM</option>
                        <option value="6:00 PM">6:00 PM</option>
                        <option value="7:00 PM">7:00 PM</option>
                        <option value="8:00 PM">8:00 PM</option>
                        <option value="9:00 PM">9:00 PM</option>
                        <option value="10:00 PM">10:00 PM</option>
                        <option value="11:00 PM">11:00 PM</option>
                        <option value="12:00 AM">12:00 AM</option>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Address</label>
                      <textarea class="form-control" id="phone" rows='4' name="address"></textarea>
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
                          <input type="text" class="form-control" id="phone" value="" name="phone">
                      </div>
                    
                      <div class="form-group">
                          <label for="exampleInputEmail1">Note</label>
                          <textarea class="form-control" id="phone" rows='4' name="desc"></textarea>
                      </div>
                  </div>
                </div>
          </div>
          <div class="card-footer">
              <button type="submit" class="btn btn-info">Confirm To Order</button>
              <button type="submit" class="btn btn-default float-right">Cancel</button>
          </div>
        </form>
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