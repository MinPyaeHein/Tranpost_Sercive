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
            <h1>Admin Register </h1>
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
<section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <form action='{{route('admins.store')}}' method="post" enctype="multipart/form-data" id='regform'>
        @csrf
        <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Admin Register Form</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="col-md-6">
            <div class="form-group">
              <div class="row justify-content-center">
                <img src="{{ asset('storage/img/default.png')}}" class="img-fluid mx-auto" alt="..." style="height: 200px; width: 300px;" id="preview">
              </div>
            </div>
          </div>
            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="file" class="custom-file-input" id="image" name="image" onchange="updateLabel()" style="padding: 10px;">
                    <label class="custom-file-label" for="image">Choose Photo</label>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Admin Name</label>
                    <input type="text" class="form-control" id="extraPrice" name="name" value="">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Password </label>
                  <input type="password" class="form-control" id="extraPrice" name="password" value="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Confirm Password</label>
                <input type="password" class="form-control" id="extraPrice"  value="">
            </div>
           
                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <textarea class="form-control" id="phone"name="address" rows='4'></textarea>
                  </div>
                 
                
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> National ID</label>
                        <input type="text" class="form-control" name="national_id" value="">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Note</label>
                        <textarea class="form-control" id="phone" name="note" rows='4'></textarea>
                    </div>
                </div>
              </div>
         </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-info">Submit</button>
            <a href="{{route('admins.index')}}" class="btn btn-default float-right">Cancel</button>
        </div>
      </div>
      </form>
      <!-- /.card -->

     
      <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<script>
  function updateLabel() {
      var input = document.getElementById('image');
      var preview = document.getElementById('preview');
      var file = input.files[0];
      var reader = new FileReader();
      reader.onload = function(e) {
        preview.src = e.target.result;
      };
      reader.readAsDataURL(file);
    }
</script>
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