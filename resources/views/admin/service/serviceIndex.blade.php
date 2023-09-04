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
          <h1>Available Service Types For Customer</h1>
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
            
            <a href="#" class="btn-sm btn-success">Add New Service Type +</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Image</th>
                <th>Type Name</th>
                <th>Description</th>
                <th>Detail</th>
                <th>Delete</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>
                  <img src=" {{asset('storage/serviceTypeCar/car.png')}}" alt="Image" width="90" height="60">
                </td>
                <td>Heavy-Duty Vehicle Transport</td>
                <td>Heavy-Duty Vehicle Transport: This category covers the transportation of heavy-duty vehicles, such as trucks, buses, construction equipment, and large machinery.</td>
                <td><a href="{{ route('services.edit',123) }}" class="btn-sm btn-info">Detail</a></td>
                <td><a href="#" class="btn-sm btn-danger">Delete</a></td>
              </tr>
              <tr>
                <td>
                  <img src=" {{asset('storage/serviceTypeCar/miniVan.jpg')}}" alt="Image" width="90" height="60">
                </td>
                <td>Accident and Salvage Vehicle Transport</td>
                <td>Here, you can group services related to the transport of accident-damaged cars, salvage vehicles, or vehicles involved in accidents that need recovery and transportation.</td>
                <td><a href="{{ route('services.edit',123) }}" class="btn-sm btn-info">Detail</a></td>
                <td><a href="#" class="btn-sm btn-danger">Delete</a></td>
              </tr>
              <tr>
                <td>
                  <img src=" {{asset('storage/serviceTypeCar/truck.jfif')}}" alt="Image" width="90" height="60">
                </td>
                <td>Commercial Fleet Transport</td>
                <td>This category is for businesses that need to transport their fleets of vehicles, including company cars, vans, or trucks.</td>
                <td><a href="{{ route('services.edit',123) }}" class="btn-sm btn-info">Detail</a></td>
                <td><a href="#" class="btn-sm btn-danger">Delete</a></td>
              </tr>
              <tr>
                <td>
                  <img src=" {{asset('storage/serviceTypeCar/motorCycle.jpg')}}" alt="Image" width="90" height="60">
                </td>
                <td>Motorcycle and Recreational Vehicle Transport</td>
                <td> Here, you can categorize services for transporting motorcycles, ATVs, recreational vehicles (RVs), and other similar vehicles.</td>
                <td><a href="{{ route('services.edit',123) }}" class="btn-sm btn-info">Detail</a></td>
                <td><a href="#" class="btn-sm btn-danger">Delete</a></td>
              </tr>
              <tr>
                <td>
                  <img src=" {{asset('storage/serviceTypeCar/bus.jfif')}}" alt="Image" width="90" height="60">
                </td>
                <td>Emergency Recovery and Towing</td>
                <td>This category is for services that provide emergency recovery and towing of vehicles involved in accidents or breakdowns</td>
                <td><a href="{{ route('services.edit',123) }}" class="btn-sm btn-info">Detail</a></td>
                <td><a href="#" class="btn-sm btn-danger">Delete</a></td>
              </tr>

 
              </tbody>
              <tfoot>
                <tr>
                  <th>Image</th>
                  <th>Type Name</th>
                  <th>Description</th>
                  <th>Detail</th>
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
    // Summernote
    $('.textarea').summernote()
  })

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