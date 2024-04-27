<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <link href="{{ asset('asset')}}/assets2/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('asset')}}/assets2/css/bootstrap-responsive.min.css" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
  rel="stylesheet">
  <link href="{{ asset('asset')}}/assets2/css/font-awesome.css" rel="stylesheet">
  <link href="{{ asset('asset')}}/assets2/css/style.css" rel="stylesheet">
  <link href="{{ asset('asset')}}/assets2/css/pages/dashboard.css" rel="stylesheet">
  <!-- <script src="{{ asset('asset')}}/assets/js/jquery-3.3.1.min.js"></script> -->
  <script src="{{ asset('asset')}}/assets2/js/jquery-1.7.2.min.js"></script>
  <script src="{{ asset('asset')}}/assets2/js/jquery.dataTables.min.js"></script>
  <link href="{{ asset('asset')}}/assets2/css/jquery.dataTables.min.css" rel="stylesheet">
  <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
</head>
<body>

  <div class="subnavbar">
    <div class="subnavbar-inner">
      <div class="container">
        <ul class="mainnav">
        <li><a href="{{ route('admin')}}"><i class="icon-home"></i><span>Home</span> </a> </li>
          <!-- <li><a href=""><i class="icon-list"></i><span>Peserta MTB</span> </a> </li> -->
          <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-list"></i><span>Peserta Road Bike</span> <b class="caret"></b></a>
            <ul class="dropdown-menu">
            <li><a href="{{ route('admin/peserta_rb/','1')}}">Men Youth</a></li>
              <li><a href="{{ route('admin/peserta_rb/','2')}}">Men Junior</a></li>
              <li><a href="{{ route('admin/peserta_rb/','3')}}">Men Elite</a></li>
              <li><a href="{{ route('admin/peserta_rb/','4')}}">Women Open</a></li>
              <li><a href="{{ route('admin/peserta_rb/','5')}}">Men Master A</a></li>
              <li><a href="{{ route('admin/peserta_rb/','6')}}">Men Master B</a></li>
            </ul>
          </li>
          <!--<li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-list"></i><span>Rekap</span> <b class="caret"></b></a>-->
          <!--  <ul class="dropdown-menu">-->
          <!--    <li><a href="">Road Bike</a></li>-->
          <!--    <li><a href="" target="_blank">Mountain Bike</a></li>-->
          <!--  </ul>-->
          <!--</li>-->
          <li><a href="{{ route('logout')}}"><i class="icon-signout"></i><span>Keluar</span> </a> </li>
        </ul>
      </div>
      <!-- /container --> 
    </div>
    <!-- /subnavbar-inner --> 
  </div>
  <!-- /subnavbar -->
  <div class="main" style="min-height: 600px">
    <div class="main-inner">
      <div class="container">
        <div class="row">
          <div class="span12">
            @yield('body')
          </div>
        </div>
        <!-- /row --> 
      </div>
      <!-- /container --> 
    </div>
    <!-- /main-inner --> 
  </div>
  <!-- /main -->
  <div class="footer">
    <div class="footer-inner">
      <div class="container">
        <div class="row">
          <div class="span12"> &copy; 2023 <a href="#">Tour de Barito Kuala</a></div>
          <!-- /span12 --> 
        </div>
        <!-- /row --> 
      </div>
      <!-- /container --> 
    </div>
    <!-- /footer-inner --> 
  </div>
  <!-- /footer --> 
<!-- Le javascript
  ================================================== --> 
  <!-- Placed at the end of the document so the pages load faster --> 
  <script src="{{ asset('asset')}}/assets2/js/excanvas.min.js"></script> 
  <script src="{{ asset('asset')}}/assets2/js/bootstrap.js"></script>
  <script src="{{ asset('asset')}}/assets2/js/base.js"></script> 

</body>
</html>
@include('sweetalert::alert')