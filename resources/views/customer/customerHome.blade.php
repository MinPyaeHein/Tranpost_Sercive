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
      <div class="row">
       
        <div class="col-md-12">
          <!-- Box Comment -->
          <div class="card card-widget">
            
            <!-- /.card-header -->
            <div class="card-body">
             
            @foreach ($cars as $index => $car)
              <!-- Attachment -->
              <div class="attachment-block clearfix">
                <div class="row">
                  <div class="col-md-1">
                      <img  src="{{asset('storage/service_car/'.$car->image_name )}}" alt="Attachment Image" width="200" height="130">
                  </div>
                  <div class="col-md-11">
                      <div class="attachment-pushed">
                        <h4 class="attachment-heading"><a href="{{ route('customerHome.edit',$car->id) }}">{{$car->service_type}}({{$car->name}})</a></h4>

                        <div class="attachment-text">
                        {{$car->short_desc}}
                          <a href="{{ route('customerHome.edit',$car->id) }}">more</a>
                        </div>
                        <!-- /.attachment-text -->
                      </div>
                  </div>
                </div>
                <!-- /.attachment-pushed -->
              </div>
            @endforeach
            
              <!-- /.attachment-block -->

              <!-- Social sharing buttons -->
            </div>
            <!-- /.card-body -->
        
            <!-- /.card-footer -->
          
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
    </div><!-- /.container-fluid -->
  </section>


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