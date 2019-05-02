<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Coinvit</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.css">
  <!-- Fixed Column -->
  <link rel="stylesheet" type="text/css" href="../dist/css/column-fixed.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <style type="text/css">

  ::-webkit-scrollbar {
    width: 10px;
    height: 10px;
    background-color: #F5F5F5;
  }

  /* Track */
  ::-webkit-scrollbar-track {
      -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
      border-radius: 10px;
      background-color: #F5F5F5;
  }
   
  /* Handle */
  ::-webkit-scrollbar-thumb {
      border-radius: 10px;
     -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
     background-color: #d2d6de;
  }
  .skin-blue .main-header li.user-header {
    background-color: #505356;
  }

  .skin-blue .wrapper, .skin-blue .main-sidebar, .skin-blue .left-side {
    background-color: #e9ecef;
  }

  </style>

  <!-- Google Font -->
  <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue fixed sidebar-mini sidebar-collapse">
  <div class="wrapper">

    <header class="main-header">
      <nav>
       <!-- Navbar Right Menu -->
        <div class="collapse navbar-collapse" style="background-color: #000;">

          <ul class="nav navbar-nav navbar-right">
           
            <li><a href="balance.php">Advertise</a></li>        
            <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              <img src="../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        
        </nav>

      
      </header>
  
      <!-- Content Wrapper. Contains page content -->
      <section>
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Manage
            <small>Side Advertise</small>
          </h1>
        </section>


        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-md-6">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Advertise One</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-5">
                      <img src="https://www.mystellar.org/GALLERYALBUM/Stellar/Banner%206%20-%20RESERVED.png" width="250" height="250">
                    </div>
                    <!-- /.col -->
                    <div class="col-md-7">

                      <div class="form-group">
                        <label for="exampleInputFile">Image Ads</label>
                        <input type="file">
                      </div>
                      <!-- Image Ads -->
                      <div class="form-group">
                        <labe>Description Ads</label>
                        <textarea class="form-control"></textarea>
                      </div>
                      <!-- Description ADS -->
                      <div class="form-group">
                        <label>Back Link Ads</label>
                        <input type="email" class="form-control" placeholder="Back Link ...">
                      </div>

                      <button type="submit" class="btn btn-info pull-right">Submit</button>
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- ./box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!-- End Ads One -->

            <div class="col-md-6">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Advertise Two</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-5">
                      <img src="https://www.mystellar.org/GALLERYALBUM/Stellar/Banner%206%20-%20RESERVED.png" width="250" height="250">
                    </div>
                    <!-- /.col -->
                    <div class="col-md-7">

                      <div class="form-group">
                        <label for="exampleInputFile">Image Ads</label>
                        <input type="file">
                      </div>
                      <!-- Image Ads -->
                      <div class="form-group">
                        <labe>Description Ads</label>
                        <textarea class="form-control"></textarea>
                      </div>
                      <!-- Description ADS -->
                      <div class="form-group">
                        <label>Back Link Ads</label>
                        <input type="email" class="form-control" placeholder="Back Link ...">
                      </div>

                      <button type="submit" class="btn btn-info pull-right">Submit</button>
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- ./box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!-- End Ads Two -->

            <div class="col-md-6">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Advertise Three</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-5">
                      <img src="https://www.mystellar.org/GALLERYALBUM/Stellar/Banner%206%20-%20RESERVED.png" width="250" height="250">
                    </div>
                    <!-- /.col -->
                    <div class="col-md-7">

                      <div class="form-group">
                        <label for="exampleInputFile">Image Ads</label>
                        <input type="file">
                      </div>
                      <!-- Image Ads -->
                      <div class="form-group">
                        <labe>Description Ads</label>
                        <textarea class="form-control"></textarea>
                      </div>
                      <!-- Description ADS -->
                      <div class="form-group">
                        <label>Back Link Ads</label>
                        <input type="email" class="form-control" placeholder="Back Link ...">
                      </div>

                      <button type="submit" class="btn btn-info pull-right">Submit</button>
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- ./box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!-- End Ads Three -->

            <div class="col-md-6">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Advertise Four</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-5">
                      <img src="https://www.mystellar.org/GALLERYALBUM/Stellar/Banner%206%20-%20RESERVED.png" width="250" height="250">
                    </div>
                    <!-- /.col -->
                    <div class="col-md-7">

                      <div class="form-group">
                        <label for="exampleInputFile">Image Ads</label>
                        <input type="file">
                      </div>
                      <!-- Image Ads -->
                      <div class="form-group">
                        <labe>Description Ads</label>
                        <textarea class="form-control"></textarea>
                      </div>
                      <!-- Description ADS -->
                      <div class="form-group">
                        <label>Back Link Ads</label>
                        <input type="email" class="form-control" placeholder="Back Link ...">
                      </div>

                      <button type="submit" class="btn btn-info pull-right">Submit</button>
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- ./box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!-- End Ads Four -->
           
          </div>
          <!-- /.row -->
          </section>
      </section> 



<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="../bower_components/raphael/raphael.min.js"></script>
<script src="../bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../bower_components/moment/min/moment.min.js"></script>
<script src="../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>


</body>
</html>
