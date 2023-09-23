@extends('layout.app')
@section('title') Co Transport @endsection

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
          <h1>Show all Customers</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Customer</li>
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
            
            <a href="{{ route('customerHome.create') }}" class="btn-sm btn-success">Add New Customer +</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Phone No</th>
                <th>Email</th>
                <th>National_id</th>
                <th>Status</th>
                <th>Delete</th>
              </tr>
              </thead>
              <tbody>
             @foreach ($users as $index => $user)
              <tr>
                <td>
                  <img src=" {{asset('storage/customer/avatar.png')}}" alt="Image" width="90" height="60">
                </td>
                <td>{{$user->name}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->national_id}}</td>
                <td>{{$user->status}}</td>
                <td><a href="#" class="btn-sm btn-danger">Delete</a></td>
              </tr>
             @endforeach
 
              </tbody>
              <tfoot>
                <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Phone No</th>
                <th>Email</th>
                <th>National_id</th>
                <th>Status</th>
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