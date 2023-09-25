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
          <h3 class="card-title">Successful Your Service Appointment Result </h3>

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
                      <label for="exampleInputEmail1">Order ID</label>
                      <input type="text" class="form-control" id="name" name="service_type"  value={{$order[0]->id}}>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Service can arrive arround {{$order[0]->time}}</label>
      
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Service Type Name:</label>
                     ({{$car[0]->service_type}})
                    </div>

                    <div class="form-group">
                      <img src=" {{asset('storage/service_car/'.$car[0]->image_name)}}" alt="Image" width="180" height="150">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Service Care Type:</label>
                      {{$car[0]->name}}
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Service Care Driver:</label>
                      {{$driver[0]->name}}
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Driver Phone:</label>
                      {{$driver[0]->phone}}
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Service Conduction:</label>
                      {{$order[0]->conduction}}
                    </div>
                  
                    <div class="form-group">
                    Looking to speak to someone right now?
                    Call (888) 411-6442 anytime between 8am and 5pm EST. If after hours, please use this form below for a call back.
                    </div>
                  
                 
                  </div>
    
              
                  </div>
                </div>
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