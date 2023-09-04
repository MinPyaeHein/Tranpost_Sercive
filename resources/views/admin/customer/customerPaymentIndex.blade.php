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
          <h1>Unpaid List or Outstanding List</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Unpaid List</li>
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
        
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>CID</th>
                <th>OID</th>
                <th>Cus Name</th>
                <th>ServiceType</th>
                <th>Total Fee</th>
                <th>Date</th>
                <th>Update</th>
                <th>Delete</th>
               
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>
                  CID-234
                </td>
                <td>
                  OID-645
                </td>
                <td>Mily Myo</td>
                <td>Specialized Equipment Transport</td>
                <td>6700THB</td>
                <td>2/3/2023</td>
                <td><a href="{{ route('customerPayment.edit',123) }}" class="btn-sm btn-info">Detail</a></td>
                <td><a href="#" class="btn-sm btn-danger">Delete</a></td>
              </tr>
              <tr>
                <td>
                  CID-234
                </td>
                <td>
                  OID-645
                </td>
                <td>Mily Myo</td>
                <td>Specialized Equipment Transport</td>
                <td>6700THB</td>
                <td>2/3/2023</td>
                <td><a href="{{ route('customerPayment.edit',123) }}" class="btn-sm btn-info">Detail</a></td>
                <td><a href="#" class="btn-sm btn-danger">Delete</a></td>
              </tr>
              <tr>
                <td>
                  CID-234
                </td>
                <td>
                  OID-645
                </td>
                <td>Mily Myo</td>
                <td>Specialized Equipment Transport</td>
                <td>6700THB</td>
                <td>2/3/2023</td>
                <td><a href="{{ route('customerPayment.edit',123) }}" class="btn-sm btn-info">Detail</a></td>
                <td><a href="#" class="btn-sm btn-danger">Delete</a></td>
              </tr>
          
     

 
              </tbody>
              <tfoot>
                <tr>
                  <th>CID</th>
                  <th>OID</th>
                  <th>Cus Name</th>
                  <th>ServiceType</th>
                  <th>Total Fee</th>
                  <th>Date</th>
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