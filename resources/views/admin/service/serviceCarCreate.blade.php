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
          <h1>Service Cars</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Service Care</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <form action='{{route('serviceCars.store')}}' method="post" enctype="multipart/form-data" id='regform'>
        @csrf
        <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Service Car Register Form</h3>

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
                    <label for="">Car Name</label>
                    <input type="text" class="form-control" id="extraPrice" name="name" value="">
                </div>
                <div class="form-group">
                  <label for="">Car NO </label>
                  <input type="" class="form-control" id="extraPrice" name="car_no" value="">
                </div>
                <div class="form-group">
                  <label for="">Size</label>
                  <input type="" class="form-control" id="extraPrice" name="size" value="">
                </div>
                
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for=""> Price Per Kilometer</label>
                        <input type="number" class="form-control" id="price" name="price" value="">
                    </div>    
                    <div class="form-group">
                      <label for=""> Service Type Name</label>
                      <input type="text" class="form-control" id="service_type" name="service_type" value="">
                  </div>                 
                    <div class="form-group">
                      <label>Driver</label>
                      <select class="form-control select2" style="width: 100%;" name="driver_id">
                        @foreach ($drivers as $index => $driver)
                          <option value="{{ $driver->id }}">{{$driver->name}}</option>
                        @endforeach
                      </select>
                    </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                        <textarea class="textarea" placeholder="Place some text here" name="desc"
                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                 </div>
                </div>

              </div>
         </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-info">Submit</button>
            <a href="{{route('serviceCars.index')}}" class="btn btn-default float-right">Cancel</button>
        </div>
      </div>
      </form>
      <!-- /.card -->

     
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

 
</div>

@section('js-place')
<script>
 $(function () {
    $('.textarea').summernote()
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