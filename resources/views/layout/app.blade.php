<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield("title","Coinvit DEX")</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset("assets/bower_components/bootstrap/dist/css/bootstrap.min.css")}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset("assets/bower_components/font-awesome/css/font-awesome.min.css")}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("assets/dist/css/AdminLTE.css")}}">
    <!-- Fixed Column -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/dist/css/column-fixed.css")}}">
    <!-- Scrollbar Custom -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/dist/css/scrollbar-custom.css")}}">
    <!-- Custom Layout -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/dist/css/custom-layout.css")}}">
    <!-- Carousel Tiny -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/dist/css/tinycarousel.css")}}" media="screen">
    <link rel="stylesheet" href="{{asset("assets/dist/css/skins/_all-skins.min.css")}}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Google Font -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style type="text/css">
        .lds-spinner {
            color: official;
            display: inline-block;
            position: relative;
            width: 64px;
            height: 64px;
        }

        .lds-spinner div {
            transform-origin: 32px 32px;
            animation: lds-spinner 1.2s linear infinite;
        }

        .lds-spinner div:after {
            content: " ";
            display: block;
            position: absolute;
            top: 3px;
            left: 29px;
            width: 5px;
            height: 14px;
            border-radius: 20%;
            background: #fff;
        }

        .lds-spinner div:nth-child(1) {
            transform: rotate(0deg);
            animation-delay: -1.1s;
        }

        .lds-spinner div:nth-child(2) {
            transform: rotate(30deg);
            animation-delay: -1s;
        }

        .lds-spinner div:nth-child(3) {
            transform: rotate(60deg);
            animation-delay: -0.9s;
        }

        .lds-spinner div:nth-child(4) {
            transform: rotate(90deg);
            animation-delay: -0.8s;
        }

        .lds-spinner div:nth-child(5) {
            transform: rotate(120deg);
            animation-delay: -0.7s;
        }

        .lds-spinner div:nth-child(6) {
            transform: rotate(150deg);
            animation-delay: -0.6s;
        }

        .lds-spinner div:nth-child(7) {
            transform: rotate(180deg);
            animation-delay: -0.5s;
        }

        .lds-spinner div:nth-child(8) {
            transform: rotate(210deg);
            animation-delay: -0.4s;
        }

        .lds-spinner div:nth-child(9) {
            transform: rotate(240deg);
            animation-delay: -0.3s;
        }

        .lds-spinner div:nth-child(10) {
            transform: rotate(270deg);
            animation-delay: -0.2s;
        }

        .lds-spinner div:nth-child(11) {
            transform: rotate(300deg);
            animation-delay: -0.1s;
        }

        .lds-spinner div:nth-child(12) {
            transform: rotate(330deg);
            animation-delay: 0s;
        }

        @keyframes lds-spinner {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        #text {
            position: absolute;
            top: 50%;
            left: 50%;
            font-size: 50px;
            color: white;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
        }

        .nav-tabs-custom>.nav-tabs {
            border-bottom-color: #000;
        }

        .nav-tabs-custom>.nav-tabs>li {
            border-top: 6px solid transparent;
        }

        .nav-tabs-custom>.nav-tabs>li.active {
            border-top-color: #d92b60;
            border-left-color: #000;
            border-right-color: #000;
        }

        .nav-tabs-custom>.nav-tabs>li {
            border-top: 6px solid transparent;
            border-top-color: transparent;
            border-left: 1px solid transparent;
            border-left-color: transparent;
            border-right: 1px solid transparent;
            border-right-color: transparent;
        }

        .nav-tabs-custom>.nav-tabs>li.active>a,
        .nav-tabs-custom>.nav-tabs>li.active:hover>a {
            background-color: #fbf6d4;
        }

        .nav-tabs-custom>.tab-content {
            background: #fbf6d4;
        }

        .btn-market-lr {
            color: #fff;
            padding: 10px;
            margin: 8px;
        }

        .btn-market-lr:hover,
        .btn-market-lr:focus,
        .btn-market-lr:active,
        .btn-market-lr.active,
        .open>.dropdown-toggle.btn-primary {
            color: #fff;
            background-color: #dd4b39;
            border-color: #f2341d;
            /*set the color you want here*/
        }

        #overlay {
            position: fixed;
            /* Sit on top of the page content */
            display: none;
            /* Hidden by default */
            width: 100%;
            /* Full width (cover the whole page) */
            height: 100%;
            /* Full height (cover the whole page) */
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            /* Black background with opacity */
            z-index: 2;
            /* Specify a stack order in case you're using a different order for other elements */
            cursor: pointer;
            /* Add a pointer on hover */
        }
    </style>

    @yield("css")
</head>
@if(strpos(url()->current(),"exchange") !== false)
<body class="skin-blue fixed sidebar-mini">
@else
<body>
@endif
    <div id="overlay">
        <div id="text">
          <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
        </div>
    </div>
    <div class="wrapper">
        <header class="main-header">
            <nav class="collapse navbar-collapse navbar-color">
                <!-- Navbar Right Menu -->
                @if(strpos(url()->current(),"exchange") !== false)
                <img src="{{asset("assets/dist/img/button/btn-hide.png")}}" data-toggle="push-menu" role="button" width="100px" height="35px" id="icon-setup" class="hide-btn">
                @endif
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle text-white" data-toggle="dropdown" href="#">
                            <i class="fa fa-th" style="font-size: 1.286em;"></i>
                        </a>
                        <ul class="dropdown-menu products-list product-list-in-box dominan">
                            <li class="item">
                                <a href="javascript:void(0)">
                                    <div class="product-img">
                                        <img src="{{asset("assets/dist/img/default-50x50.gif")}}" alt="Product Image">
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
                                        <img src="{{asset("assets/dist/img/default-50x50.gif")}}" alt="Product Image">
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
                        <!-- dist/img/button/btn-logout.png -->
                        @if(auth()->check() || auth()->guard("trade_direct")->check())
                        <a style="padding:0px;width:130px;height:35px" href="{{url("logout")}}">
                          <img src="{{asset("assets/dist/img/button/btn-logout.png")}}" width="130px" height="35px" type="button" >
                        </a>
                        @else
                        <a style="padding:0px;width:130px;height:35px" href="{{url("login")}}">
                          <img src="{{asset("assets/dist/img/button/btn-login-register.png")}}" width="130px" height="35px" type="button" data-toggle="modal" data-target="#modal-lr">
                        </a>
                        @endif
                    </li>
                </ul>
            </nav>
            @if(strpos(url()->current(),"exchange") !== false)
            <nav class="navbar navbar-static-top" style="background-color: #232e32; z-index: -1;  min-height: 35px;">
                <div class="scrollmenu" id="coin-slider">
                    <a href="#home"><i class="fa fa-star text-yellow"></i>
                        Only </a>
                    <a href="{{url("exchange/stelar")}}">Stellar</a>
                    <a href="{{url("exchange/ardor")}}">Ardor</a>
                </div>


                <ul class="nav navbar-nav navbar-right chat-btn hide-chat">
                    <li><a href="#"><i class="glyphicon glyphicon-comment"></i></a></li>
                </ul>
            </nav>
            @endif
        </header>
        @yield("content")
        <footer class="main-footer" style="margin-left: 0;">
            <div class="row" style="margin-right: 80px; margin-left: 80px;">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <p class="font-16">ABOUT COINVIT</p>
                    <p class="font-12"><a href="//t.me/FRASINDO">Contact Us</a>
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
<script src="{{asset("assets/bower_components/jquery/dist/jquery.min.js")}}"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-latest.min.js"></script>
<!-- JS Carousel -->
<script src="{{asset("assets/dist/js/jquery.tinycarousel.js")}}"></script>

<!-- Bootstrap 3.3.7 -->
<script src="{{asset("assets/bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
<!-- DataTables -->
<script src="{{asset("assets/bower_components/datatables.net/js/jquery.dataTables.min.js")}}"></script>
<script src="{{asset("assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{asset("assets/dist/js/adminlte.min.js")}}"></script>
<!-- Sparkline -->
<script src="{{asset("assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js")}}"></script>
<!-- SlimScroll -->
<script src="{{asset("assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js")}}"></script>
<!-- Pagination Setup Trade -->
<script src="{{asset("assets/dist/js/pagination-trade.js")}}"></script>
<!-- Redirect Mobile Version -->
<script src="{{asset("assets/dist/js/redirect-mobile.js")}}"></script>
<!-- Dropdown Hover -->
<script src="{{asset("assets/dist/js/dropdown-hover.js")}}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script type="text/javascript">
    function errorImg(){
      $(".tokenachor").attr("src","{{url('assets/logo/blank.png')}}")
    }
    function on() {
        document.getElementById("overlay").style.display = "block";
    }

    function off() {
        document.getElementById("overlay").style.display = "none";
    }
    var oldXHR = window.XMLHttpRequest;

    function newXHR() {
        var realXHR = new oldXHR();
        realXHR.addEventListener("readystatechange", function() {
            if(realXHR.readyState==1){
                on();
            }
            if(realXHR.readyState==2){

            }
            if(realXHR.readyState==3){

            }
            if(realXHR.readyState==4){
                off();
            }
        }, false);
        return realXHR;
    }
    window.XMLHttpRequest = newXHR;
</script>
@yield("js")

</html>
