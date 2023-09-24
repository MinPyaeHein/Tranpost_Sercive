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
          <h1>Service Types</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Service Types</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
    
        <!-- /.card -->
        
        <div class="card">
          <div class="card-header">
            
            <a href="{{route('serviceCarCreate.create')}}" class="btn-sm btn-success">Add New Service Car +</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Image</th>
                <th>Car Name</th>
                <th>Car No</th>
                <th>Size</th>
                <th>Price Per Kilo</th>
                <th>Driver</th>
                <th>Update</th>
                <th>Delete</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($serviceCars as $index => $serviceCar)
                <tr>
                  <td>
                    <img src=" {{asset('storage/service_car/'.$serviceCar->image_name)}}" alt="Image" width="90" height="60">
                  <td>{{$serviceCar->name}}</td>
                  <td>{{$serviceCar->car_no}}</td>
                  <td>{{$serviceCar->size}}</td>
                  <td>{{$serviceCar->price}}</td>
                  <td>{{$serviceCar->user->name}}</td>
                 
                  <td><a href="#" class="btn-sm btn-info">Detail</a></td>
                  <td><a href="#" class="btn-sm btn-danger">Delete</a></td>
                </tr>
                @endforeach
             
              </tbody>
              <tfoot>
                <tr>
                  <th>Image</th>
                  <th>Car Name</th>
                  <th>Car No</th>
                  <th>Size</th>
                  <th>Price Per Kilo</th>
                  <th>Driver</th>
                  <th>Update</th>
                  <th>Delete</th>
                </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
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