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
             

              <!-- Attachment -->
              <div class="attachment-block clearfix">
                <div class="row">
                  <div class="col-md-1">
                      <img  src="{{asset('storage/orderdetail/accident1.jfif')}}" alt="Attachment Image" width="200" height="130">
                  </div>
                  <div class="col-md-11">
                      <div class="attachment-pushed">
                        <h4 class="attachment-heading"><a href="{{ route('customerHome.edit',123) }}">Heavy-Duty Vehicle Transport</a></h4>

                        <div class="attachment-text">
                          When it comes to moving the big stuff, trust our Heavy-Duty Vehicle Transport service. We specialize in transporting heavy-duty vehicles like trucks, buses, construction equipment, and large machinery. With a fleet of specialized carriers and experienced drivers, we ensure safe and efficient transport, no matter the size. Whether you need to relocate your construction fleet or transport oversized machinery, we've got you covered.... 
                          <a href="{{ route('customerHome.edit',123) }}">more</a>
                        </div>
                        <!-- /.attachment-text -->
                      </div>
                  </div>
                </div>
                <!-- /.attachment-pushed -->
              </div>
              <div class="attachment-block clearfix">
                <div class="row">
                  <div class="col-md-1">
                      <img  src="{{asset('storage/orderdetail/accident2.jfif')}}" alt="Attachment Image" width="200" height="130">
                  </div>
                  <div class="col-md-11">
                      <div class="attachment-pushed">
                        <h4 class="attachment-heading"><a href="{{ route('customerHome.edit',123) }}">Accident and Salvage Vehicle Transport</a></h4>

                        <div class="attachment-text">
                         When accidents happen, and vehicles are damaged, our Accident and Salvage Vehicle Transport service is here to assist. We specialize in the careful transport of accident-damaged cars, salvage vehicles, and those involved in accidents that require recovery and transportation. Our trained professionals handle each vehicle with precision, ensuring it arrives safely at its destination. ... 
                         <a href="{{ route('customerHome.edit',123) }}">more</a>
                        </div>
                        <!-- /.attachment-text -->
                      </div>
                  </div>
                </div>
                <!-- /.attachment-pushed -->
              </div>
              <div class="attachment-block clearfix">
                <div class="row">
                  <div class="col-md-1">
                      <img  src="{{asset('storage/orderdetail/accident1.jfif')}}" alt="Attachment Image" width="200" height="130">
                  </div>
                  <div class="col-md-11">
                      <div class="attachment-pushed">
                        <h4 class="attachment-heading"><a href="{{ route('customerHome.edit',123) }}">Specialized Equipment Transport</a></h4>

                        <div class="attachment-text">
                          When it comes to moving the big stuff, trust our Heavy-Duty Vehicle Transport service. We specialize in transporting heavy-duty vehicles like trucks, buses, construction equipment, and large machinery. With a fleet of specialized carriers and experienced drivers, we ensure safe and efficient transport, no matter the size. Whether you need to relocate your construction fleet or transport oversized machinery, we've got you covered.... 
                          <a href="{{ route('customerHome.edit',123) }}">more</a>
                        </div>
                        <!-- /.attachment-text -->
                      </div>
                  </div>
                </div>
                <!-- /.attachment-pushed -->
              </div>
              <div class="attachment-block clearfix">
                <div class="row">
                  <div class="col-md-1">
                      <img  src="{{asset('storage/orderdetail/accident2.jfif')}}" alt="Attachment Image" width="200" height="130">
                  </div>
                  <div class="col-md-11">
                      <div class="attachment-pushed">
                        <h4 class="attachment-heading"><a href="{{ route('customerHome.edit',123) }}">Motorcycle and Recreational Vehicle Transport</a></h4>

                        <div class="attachment-text">
                         When accidents happen, and vehicles are damaged, our Accident and Salvage Vehicle Transport service is here to assist. We specialize in the careful transport of accident-damaged cars, salvage vehicles, and those involved in accidents that require recovery and transportation. Our trained professionals handle each vehicle with precision, ensuring it arrives safely at its destination. ... 
                         <a href="{{ route('customerHome.edit',123) }}">more</a>
                        </div>
                        <!-- /.attachment-text -->
                      </div>
                  </div>
                </div>
                <!-- /.attachment-pushed -->
              </div>
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