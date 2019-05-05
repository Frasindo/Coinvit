

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>@yield("title","Coinvit DEX")</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <!-- Bootstrap 3.3.7 -->
      <link rel="stylesheet" href="{{asset("bower_components/bootstrap/dist/css/bootstrap.min.css")}}">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="{{asset("bower_components/font-awesome/css/font-awesome.min.css")}}">
      <!-- Theme style -->
      <link rel="stylesheet" href="{{asset("dist/css/AdminLTE.css")}}">
      <!-- Fixed Column -->
      <link rel="stylesheet" type="text/css" href="{{asset("dist/css/column-fixed.css")}}">
      <!-- Scrollbar Custom -->
      <link rel="stylesheet" type="text/css" href="{{asset("dist/css/scrollbar-custom.css")}}">
      <!-- Custom Layout -->
      <link rel="stylesheet" type="text/css" href="{{asset("dist/css/custom-layout.css")}}">
      <!-- Carousel Tiny -->
      <link rel="stylesheet" type="text/css" href="{{asset("dist/css/tinycarousel.css")}}" media="screen">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="//oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Google Font -->
      <link rel="stylesheet"
         href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
      <style type="text/css">
         .nav-tabs-custom > .nav-tabs {
         border-bottom-color: #000;
         }
         .nav-tabs-custom > .nav-tabs > li {
         border-top: 6px solid transparent;
         }
         .nav-tabs-custom > .nav-tabs > li.active {
         border-top-color: #d92b60;
         border-left-color: #000;
         border-right-color: #000;
         }
         .nav-tabs-custom > .nav-tabs > li {
         border-top: 6px solid transparent;
         border-top-color: transparent;
         border-left: 1px solid transparent;
         border-left-color: transparent;
         border-right: 1px solid transparent;
         border-right-color: transparent;
         }
         .nav-tabs-custom > .nav-tabs > li.active > a, .nav-tabs-custom > .nav-tabs > li.active:hover > a {
         background-color: #fbf6d4;
         }
         .nav-tabs-custom > .tab-content {
         background: #fbf6d4;
         }
         .btn-market-lr{
         color: #fff; padding: 10px; margin: 8px;
         }
         .btn-market-lr:hover, .btn-market-lr:focus, .btn-market-lr:active, .btn-market-lr.active, .open>.dropdown-toggle.btn-primary {
         color: #fff;
         background-color: #dd4b39;
         border-color: #f2341d; /*set the color you want here*/
         }
      </style>
      @yield("css")
   </head>
   <body>
      <div class="wrapper">
      <header class="main-header">
         <nav class="collapse navbar-collapse navbar-color">
            <!-- Navbar Right Menu -->
            <ul class="nav navbar-nav navbar-right">
               <li class="dropdown">
                  <a class="dropdown-toggle text-white" data-toggle="dropdown" href="#">
                  <i class="fa fa-th" style="font-size: 1.286em;"></i>
                  </a>
                  <ul class="dropdown-menu products-list product-list-in-box dominan">
                     <li class="item">
                        <a href="javascript:void(0)">
                           <div class="product-img">
                              <img src="{{asset("dist/img/default-50x50.gif")}}" alt="Product Image">
                           </div>
                           <div class="product-info">
                              <span class="product-title">Exchange</span>
                              <span class="product-description">
                              Crypto Asset Exchange
                              </span>
                           </div>
                        </a>
                     </li>
                     <li class="item">
                        <a href="javascript:void(0)">
                           <div class="product-img">
                              <img src="dist/img/default-50x50.gif" alt="Product Image">
                           </div>
                           <div class="product-info">
                              <span class="product-title">Academy</span>
                              <span class="product-description">
                              Blockchain & Crypto
                              </span>
                           </div>
                        </a>
                     </li>
                     <li class="item">
                        <a href="javascript:void(0)">
                           <div class="product-img">
                              <img src="dist/img/default-50x50.gif" alt="Product Image">
                           </div>
                           <div class="product-info">
                              <span class="product-title">Education</span>
                              <span class="product-description">
                              Education Blockchain & Crypto
                              </span>
                           </div>
                        </a>
                     </li>
                     <li class="item">
                        <a href="javascript:void(0)">
                           <div class="product-img">
                              <img src="dist/img/default-50x50.gif" alt="Product Image">
                           </div>
                           <div class="product-info">
                              <span class="product-title">Crypto News</span>
                              <span class="product-description">
                              Self Publication News
                              </span>
                           </div>
                        </a>
                     </li>
                     <li class="item">
                        <a href="javascript:void(0)">
                           <div class="product-img">
                              <img src="dist/img/default-50x50.gif" alt="Product Image">
                           </div>
                           <div class="product-info">
                              <span class="product-title">PORTAL</span>
                              <span class="product-description">
                              Self Publication News
                              </span>
                           </div>
                        </a>
                     </li>
                     <li class="item">
                        <a href="javascript:void(0)">
                           <div class="product-img">
                              <img src="dist/img/default-50x50.gif" alt="Product Image">
                           </div>
                           <div class="product-info">
                              <span class="product-title">FORUM</span>
                              <span class="product-description">
                              Crypto ANN, Hangout
                              </span>
                           </div>
                        </a>
                     </li>
                     <li class="item">
                        <a href="javascript:void(0)">
                           <div class="product-img">
                              <img src="{{asset("dist/img/default-50x50.gif")}}" alt="Product Image">
                           </div>
                           <div class="product-info">
                              <span class="product-title">Marketing</span>
                              <span class="product-description">
                              Self Advertising Platform
                              </span>
                           </div>
                        </a>
                     </li>
                  </ul>
               </li>
               <li><a href="{{url("/")}}">Markets</a></li>
               <li><a href="{{url("/exchange")}}">Exchange</a></li>
               <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="{{url("/exchange/cex")}}">
                  Centralize <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                     <li><a tabindex="-1" href="{{url("/exchange/wallet?type=cex")}}">Wallet</a></li>
                     <li><a tabindex="-1" href="{{url("/exchange/orders?type=cex")}}">Orders</a></li>
                     <li><a tabindex="-1" href="{{url("/exchange/history?type=cex")}}">History</a></li>
                  </ul>
               </li>
               <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="{{url("/exchange/dex")}}">
                  Decentralize <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a tabindex="-1" href="{{url("/exchange/wallet?type=dex")}}">Wallet</a></li>
                    <li><a tabindex="-1" href="{{url("/exchange/orders?type=dex")}}">Orders</a></li>
                    <li><a tabindex="-1" href="{{url("/exchange/history?type=dex")}}">History</a></li>
                  </ul>
               <li>
                  <a href="#">
                  <img src="//upload.wikimedia.org/wikipedia/commons/d/db/Google_Translate_Icon.png" width="20" height="20">
                  </a>
               </li>
               <li>
                  <a href="#">
                  <i class="fa fa-moon-o"></i>
                  </a>
               </li>
               </li>
               <li>
                  <a href="{{url("account/myactivity")}}">
                     <i class="glyphicon glyphicon-wrench"></i>
                  </a>
               </li>
               <!-- <li>
                  <img src="dist/img/button/btn-logout.png" width="130px" height="35px" type="button">
                  <img src="dist/img/button/btn-logout-hover.png" width="130px" height="35px" type="button">
               </li> -->
               <li>
                  <!-- Image Hover -->
                  <!-- <img src="dist/img/button/btn-login-register-hover.png" width="130px" height="35px" type="button"  data-toggle="modal" data-target="#modal-lr"> -->
                  <img src="{{asset("dist/img/button/btn-login-register.png")}}" width="130px" height="35px" type="button"  data-toggle="modal" data-target="#modal-lr">
               </li>
            </ul>
         </nav>
      </header>
      @yield("content")
      <footer class="main-footer" style="margin-left: 0;">
         <div class="row" style="margin-right: 80px; margin-left: 80px;">
            <div class="col-md-3 col-sm-3 col-xs-3">
               <p class="font-16">ABOUT COINVIT</p>
               <p class="font-12"><a href="//t.me/FRASINDO">Contact Us</a>
               </h4>
               <p class="font-12"><a href="#">Privacy Policy</a></p>
               <p class="font-12"><a href="#">Terms of Use</a></p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
               <p class="font-16">SUPPORT</p>
               <p class="font-12"><a href="contact-us.html">++ Contact Support ++</a></p>
               <p class="font-12"><a href="contact-support.html">Guides</a></p>
               <p class="font-12"><a href="#">++ SUBMIT A TOKEN ++</a></p>
               <p class="font-12"><a href="#">REPORT Abuse</a></p>
               <p class="font-12"><a href="#">API Documentation</a></p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
               <p class="font-16">NEWS</p>
               <p class="font-12"><a href="http://www.frasindo.com/media/">Press Release</a></p>
               <p class="font-12"><a href="//twitter.com/frascoin">Follow us on Twitter</a></p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 text-center">
               <a href="advertise.html">
               <button type="button" class="btn btn-warning btn-lg btn-block font-for-head" style="margin-top: 20px;"><b>Self Advertise</b></button>
               </a>
               <label>
               <a href="//t.me/FRASINDO">
               <i class="fa fa-telegram logo-socmed"></i>
               </a>
               </label>
               <label>
               <a href="//www.facebook.com/frasindo/">
               <i class="fa fa-facebook-square logo-socmed"></i>
               </a>
               </label>
               <label>
               <a href="//twitter.com/frascoin">
               <i class="fa fa-twitter logo-socmed"></i>
               </a>
               </label>
               <label>
               <a href="">
               <i class="fa fa-reddit logo-socmed"></i>
               </a>
               </label>
               <label>
               <a href="">
               <i class="fa fa-medium logo-socmed"></i>
               </a>
               </label>
               <label>
               <a href="//www.instagram.com/frasindoproject/">
               <i class="fa fa-instagram logo-socmed"></i>
               </a>
               </label>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
            </div>
         </div>
      </footer>
      <!-- End Footer -->
   </body>
   <!-- jQuery 3 -->
   <script src="{{asset("bower_components/jquery/dist/jquery.min.js")}}"></script>
   <script type="text/javascript" src="//code.jquery.com/jquery-latest.min.js"></script>
   <!-- JS Carousel -->
   <script src="{{asset("dist/js/jquery.tinycarousel.js")}}"></script>

   <!-- Bootstrap 3.3.7 -->
   <script src="{{asset("bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
   <!-- DataTables -->
   <script src="{{asset("bower_components/datatables.net/js/jquery.dataTables.min.js")}}"></script>
   <script src="{{asset("bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js")}}"></script>
   <!-- AdminLTE App -->
   <script src="{{asset("dist/js/adminlte.min.js")}}"></script>
   <!-- Sparkline -->
   <script src="{{asset("bower_components/jquery-sparkline/dist/jquery.sparkline.min.js")}}"></script>
   <!-- jvectormap  -->
   <script src="{{asset("plugins/jvectormap/jquery-jvectormap-1.2.2.min.js")}}"></script>
   <script src="{{asset("plugins/jvectormap/jquery-jvectormap-world-mill-en.js")}}"></script>
   <!-- SlimScroll -->
   <script src="{{asset("bower_components/jquery-slimscroll/jquery.slimscroll.min.js")}}"></script>
   <!-- Pagination Setup Trade -->
   <script src="{{asset("dist/js/pagination-trade.js")}}"></script>
   <!-- Redirect Mobile Version -->
   <script src="{{asset("dist/js/redirect-mobile.js")}}"></script>
   <!-- Dropdown Hover -->
   <script src="{{asset("dist/js/dropdown-hover.js")}}"></script>
   @yield("js")
</html>
