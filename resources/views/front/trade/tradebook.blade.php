@extends('layout.app')

@section('title',$title)

@section('content')
<!-- Header menu asset-asset coin -->

<aside class="main-sidebar">
    <!-- Loo asset then for maximize minimize sidebar left -->
    <div class="user-panel sidebar-toggle" data-toggle="push-menu" role="button">
        @if(strpos(url()->current(),"ardor") !== false)
        <div class="pull-left">
          <img src="{{asset("assets/logo/ardor.png")}}" style="width: 100%; max-width: 50px; height: auto;">
        </div>
        <div class="pull-left info">
          <p style="font-size: 28px; font-style: italic;">Ardor</p>
          <b>Blockchain</b>
        </div>
        @elsif(strpos(url()->current(),"stellar") !== false)
        @endif
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                    <i class="fa fa-search"></i>
                </button>
            </span>
        </div>
        <div class="checkbox text-right" style="color: white; margin: -1px 10px -1px 15px;">
            <label>
                <input type="checkbox" id="fav">
                Show
                <i class="fa fa-star text-yellow"></i>
                Only
            </label>
        </div>
    </form>
    <!-- End search form -->
    <!-- Section Layout for list asset coin  -->
    <section>
        <!-- Button Token/Fiat -->
        <div class="text-center" style="margin-right: 8px; margin-left: 8px;">
            <!-- Image hover -->
            <!-- <img src="dist/img/button/btn-token-hover.png" width="25%" height="30px" class="btn-token"> -->
            <img src="{{asset("assets/dist/img/button/btn-token.png")}}" width="25%" height="30px" id="btn-token">

            <!-- Image Hover -->
            <!-- <img src="dist/img/button/btn-fiat-hover.png" width="25%" height="30px" class="btn-fiat"> -->
            <img src="{{asset("assets/dist/img/button/btn-fiat.png")}}" width="25%" height="30px" id="btn-fiat">
        </div>
        <!-- End Button Token/Fiat -->
        <!-- List for sub asset i in Sidebar Left-->
        <ul class="sidebar-menu" data-widget="tree" id="asset">

        </ul>
        <ul class="sidebar-menu" data-widget="tree" style="background-color: #000;display: block;">
            <li>
                <a href="#" style="padding: 12px 5px 12px 15px;">
                    <i  class="fa fa-wifi text-green"></i>
                    <span class="hide-text">Connected</span>
                </a>
            </li>
        </ul>
        <!-- /.sidebar -->
    </section>
    <!-- End section Layout for list asset coin  -->
</aside>
<div class="content-wrapper">
<section class="space-upper">
<div class="row">
<div class="col-lg-11 col-md-11 col-sm-11" id="left-layout" style="margin-left: 5px;">
<div class="box">
    <div class="box-header">
        <div class="row margin-beside">
            <div class="col-lg-2 col-md-2 col-sm-3 header-asset-panel" style="margin-top: -3px;">
                <!-- Base Asset -->
                <!-- col-sm-5 -->
                <div class="col-sm-5 dropbtn" id="base-asset">
                    <!-- Dropdown -->
                    <div class="dropdown">
                        <!-- col-sm-6 -->
                        <div class="col-sm-6" style="padding: 0px 0px 0px 0px;">
                            <img src="{{$info["logo"]}}" class="img-logo-asset text-left" style="float: left;">
                        </div>
                        <!-- End col-sm-6 -->
                        <!-- col-sm-6 -->
                        <div class="col-sm-6" style="padding: 15px 0px 0px 0px;">
                            <span style="float: left;" class="font-c-asset text-black">{{$info["name"]}}</span>
                        </div>
                        <!-- End col-sm-6 -->
                        <div class="dropdown-content" id="content-base">
                            <a href="#" class="font-12"><i class="glyphicon glyphicon-retweet"></i> Change</a>
                        </div>
                    </div>
                    <!-- End dropdown -->
                </div>
                <!-- End col-sm-5 -->

                <!-- End Base Asset -->

                <!-- Arrow Chage Asset -->
                <div class="col-sm-2 text-center" id="change-asset">
                    <span>
                        <img src="{{asset("assets/dist/img/button/btn-change-asset.png")}}" style="margin-top: 5px;" width="100%" />
                    </span>
                </div>
                <!-- End Arrow Asset -->

                <!-- Counter Asset -->
                <!-- col-sm-5 -->
                <div class="col-sm-5 dropbtn" id="counter-asset">
                    <!-- Dropdown -->
                    <div class="dropdown" style="float:right;">
                        <!-- col-sm-6 -->
                        <div class="col-sm-6" style="padding: 15px 0px 0px 0px;">
                            <span class="font-c-asset text-black" style="float: right;">
                              @if(strpos(url()->current(),"ardor") !== false)
                              IGNIS
                              @elseif(strpos(url()->current(),"stellar") !== false)
                              STELLAR
                              @endif
                              </span>
                        </div>
                        <!-- End col-sm-6 -->
                        <!-- col-sm-6 -->
                        <div class="col-sm-6" style="padding: 0px 0px 0px 0px;">
                          @if(strpos(url()->current(),"ardor") !== false)
                          <img src="{{asset("assets/logo/ignis.png")}}" class="img-logo-asset" style="float: right;">
                          @elseif(strpos(url()->current(),"stellar") !== false)
                          <img src="{{asset("assets/logo/stellar.png")}}" class="img-logo-asset" style="float: right;">
                          @endif
                        </div>
                        <!-- End col-sm-6 -->
                        <div class="dropdown-content" id="content-counter">
                            <a href="#" class="font-12"><i class="glyphicon glyphicon-retweet"></i> Change</a>
                        </div>
                    </div>
                    <!-- End dropdown -->
                </div>
                <!-- End col-sm-5 -->

                <!-- End Counter Asset -->
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 header-asset-panel space-margin-20">
                <div class="description-block">
                  @if(strpos(url()->current(),"ardor") !== false)
                  <h6 class="description-header">{{$info["price"]}} IGNIS</h6>
                  <span class="description-text">LAST PRICE</span>
                  @elseif(strpos(url()->current(),"stellar") !== false)
                  <h6 class="description-header">{{$info["price"]}} XLM</h6>
                  <span class="description-text">LAST PRICE</span>
                  @endif
                </div>
            </div>
            <!-- End column-6-header -->
            <div class="col-lg-2 col-md-2 col-sm-2 header-asset-panel space-margin-20">
                <div class="description-block">
                    <h6 class="description-header {{$info["change_color"]}}" class="space-change"><i class="{{$info["change_icon"]}} {{$info["change_color"]}}"></i> {{$info["change_value"]}} %</h6>
                    <span class="description-text">% CHANGE</span>
                </div>
            </div>
            <!-- End col-lg-2 -->
            <div class="col-lg-2 col-md-2 col-sm-2  header-asset-panel space-margin-20">
                <div class="description-block">
                  @if(strpos(url()->current(),"ardor") !== false)
                  <h6 class="description-header text-green">{{$info['h']}} IGNIS</h6>
                  <h6 class="description-header text-red">{{$info['l']}} IGNIS</h6>
                  <span class="description-text">HIGH & LOW</span>
                  @elseif(strpos(url()->current(),"stellar") !== false)
                  <h6 class="description-header text-green">{{$info['h']}} XLM</h6>
                  <h6 class="description-header text-red">{{$info['l']}} XLM</h6>
                  <span class="description-text">HIGH & LOW</span>
                  @endif
                </div>
            </div>
            <!-- End col-lg-2 -->
            <div class="col-lg-2 col-md-2 col-sm-2  header-asset-panel space-margin-20">
                <div class="description-block">
                  @if(strpos(url()->current(),"ardor") !== false)
                  <h6 class="description-header">{{$info["volume"]}} IGNIS</h6>
                  <span class="description-text">VOLUME</span>
                  @elseif(strpos(url()->current(),"stellar") !== false)
                  <h6 class="description-header">{{$info["volume"]}} XLM</h6>
                  <span class="description-text">VOLUME</span>
                  @endif
                </div>
            </div>
            <!-- End col-lg-2 -->
            <div class="col-lg-2 col-md-2 col-sm-2  header-asset-panel space-margin-20 text-right">
                <img src="{{asset("assets/logo/logocoinvit.png")}}" class="logo-coinvit">
            </div>
            <!-- End col-md-2 for logo -->
        </div>
    </div>
    <!-- End box-header -->
    <div class="box">
        <div class="box-header" class="timelapse-layout" style="margin-top: -5px;">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <span>Candlestick : </span>
                    <div class="btn-group">
                        <button type="button" class="btn btn-xs btn-default">1m</button>
                        <button type="button" class="btn btn-xs btn-default">5m</button>
                        <button type="button" class="btn btn-xs btn-default">15m</button>
                        <button type="button" class="btn btn-xs btn-default">30m</button>
                        <button type="button" class="btn btn-xs btn-default">1h</button>
                        <button type="button" class="btn btn-xs btn-default">4h</button>
                        <button type="button" class="btn btn-xs btn-default">1d</button>
                        <button type="button" class="btn btn-xs btn-default">1w</button>
                        <button type="button" class="btn btn-xs btn-default">1m</button>
                        <button type="button" class="btn btn-xs btn-default">All</button>
                    </div>
                </div>
                <!-- End column -->
            </div>
        </div>
        <!-- End box-header -->
        <div class="box-body" style="margin-top: -15px;">
            <!-- Candle Stick Main -->
            <iframe src="http://127.0.0.1:9090/" class="candle-layout"></iframe>
            <div class="row" style="margin-top: 4px;">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="box box-success box-trade height-info">
                        <form role="form" class="form-horizontal">
                            <div class="box-header">
                                <h1 class="box-title text-green">BUY FRAS</h1>
                                <div class="text-right">
                                    <h5 style="margin-top: -5px;">You have : <b>0.00000000 FRAS</b></h5>
                                </div>
                            </div>
                            <div class="box-body" style="height: auto;">
                                <div class="form-group meet-margin" style="margin-top: -25px;">
                                    <div class="col-sm-2 custom-sm-2">
                                        <label class="control-label text-left font-for-desc">AMOUNT</label>
                                    </div>
                                    <!-- End Amount col-sm-2 -->
                                    <div class="col-sm-10" style="margin-bottom: 10px;">
                                        <div class="input-group input-trade-form">
                                            <input type="number" class="form-control text-right input-trade-form">
                                            <span class="input-group-addon font-for-desc" style="width: 64px;">XLM</span>
                                        </div>
                                        <!-- End input-group -->
                                    </div>
                                    <!-- End col-sm-10 -->
                                    <div class="col-sm-2  custom-sm-2"></div>
                                    <div class="col-sm-10" style="margin-top: -5px;">
                                        <div class="col-sm-3 setup-btn-persen">
                                            <button type="button" class="btn btn-default btn-flat setup-btn-padding">25%</button>
                                        </div>
                                        <div class="col-sm-3 setup-btn-persen">
                                            <button type="button" class="btn btn-default btn-flat setup-btn-padding">50%</button>
                                        </div>
                                        <div class="col-sm-3 setup-btn-persen">
                                            <button type="button" class="btn btn-default btn-flat setup-btn-padding">75%</button>
                                        </div>
                                        <div class="col-sm-3 setup-btn-persen">
                                            <button type="button" class="btn btn-default btn-flat setup-btn-padding">100%</button>
                                        </div>
                                    </div>
                                    <!-- End col-sm-10 -->
                                    <div class="col-sm-2 meet-margin custom-sm-2">
                                        <label class="control-label text-left font-for-desc">PRICE</label>
                                    </div>
                                    <!-- End Price col-sm-2 -->
                                    <div class="col-sm-10 meet-margin">
                                        <div class="input-group input-trade-form">
                                            <input type="number" class="form-control text-right input-trade-form">
                                            <span class="input-group-addon font-for-desc" style="width: 64px;">XLM</span>
                                        </div>
                                        <!-- End input-group -->
                                    </div>
                                    <!-- End col-sm-10 -->
                                    <div class="col-sm-2 custom-sm-2">
                                        <label class="control-label text-left font-for-desc">TOTAL</label>
                                    </div>
                                    <!-- End Total col-sm-2 -->
                                    <div class="col-sm-10">
                                        <div class="input-group input-trade-form">
                                            <input type="number" class="form-control text-right input-trade-form">
                                            <span class="input-group-addon font-for-desc" style="width: 64px;">FRAS</span>
                                        </div>
                                        <!-- End input-group -->
                                    </div>
                                    <!-- End col-sm-10 -->
                                </div>
                                <div class="text-right" style="margin-top: 20px;">
                                    <button type="button" class="btn btn-success btn-block">BUY</button>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </form>
                    </div>
                    <!-- End Box -->
                </div>
                <!-- End col-lg-4 -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="box box-danger box-trade height-info">
                        <form role="form" class="form-horizontal">
                            <div class="box-header">
                                <h1 class="box-title text-red">SELL FRAS</h1>
                                <div class="text-right">
                                    <h5 style="margin-top: -5px;">You have : <b>0.00000000 FRAS</b></h5>
                                </div>
                            </div>
                            <div class="box-body" style="height: auto;">
                                <div class="form-group meet-margin" style="margin-top: -25px;">
                                    <div class="col-sm-2 custom-sm-2">
                                        <label class="control-label text-left font-for-desc">AMOUNT</label>
                                    </div>
                                    <div class="col-sm-10" style="margin-bottom: 10px;">
                                        <div class="input-group input-trade-form">
                                            <input type="number" class="form-control text-right input-trade-form">
                                            <span class="input-group-addon font-for-desc" style="width: 64px;">FRAS</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group meet-margin" style="margin-top:-40px;">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-10" style="margin-top: -5px;">
                                        <div class="col-sm-3 setup-btn-persen">
                                            <button type="button" class="btn btn-default btn-flat setup-btn-padding">25%</button>
                                        </div>
                                        <div class="col-sm-3 setup-btn-persen">
                                            <button type="button" class="btn btn-default btn-flat setup-btn-padding">50%</button>
                                        </div>
                                        <div class="col-sm-3 setup-btn-persen">
                                            <button type="button" class="btn btn-default btn-flat setup-btn-padding">75%</button>
                                        </div>
                                        <div class="col-sm-3 setup-btn-persen">
                                            <button type="button" class="btn btn-default btn-flat setup-btn-padding">100%</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group meet-margin">
                                    <div class="col-sm-2 custom-sm-2">
                                        <label class="control-label text-left font-for-desc">PRICE</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="input-group input-trade-form">
                                            <input type="number" class="form-control text-right input-trade-form">
                                            <span class="input-group-addon font-for-desc" style="width: 64px;">XLM</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group meet-margin">
                                    <div class="col-sm-2 custom-sm-2">
                                        <label class="control-label text-left font-for-desc">TOTAL</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="input-group input-trade-form">
                                            <input type="number" class="form-control text-right input-trade-form">
                                            <span class="input-group-addon font-for-desc" style="width: 64px;">XLM</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right" style="margin-top: 20px;">
                                    <button type="button" class="btn btn-danger btn-block">SELL</button>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </form>
                    </div>
                    <!-- End Box -->
                </div>
                <!-- End col-lg-4 -->
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <img class="img-responsive" style="width:100%;height:100%" src="https://www.mystellar.org/GALLERYALBUM/Stellar/Banner%206%20-%20RESERVED.png" alt="">
                </div>
            </div>
            <!-- End Row -->
            <div class="row">
                <!-- column-2-left-buy for SELL-->
                <div class="col-lg-6  col-md-6 col-sm-6">
                    <table class="table table-hover box-trade display" id="bid" cellspacing="0" style="width:100%">
                        <thead class="head-column" style="width:100%">
                            <tr>
                                @if(strpos(url()->current(),"ardor") !== "ardor")
                                <th><i class="fa fa-angle-double-right text-green"></i></th>
                                <th>SUM (IGNIS)</th>
                                <th>TOTAL (IGNIS)</th>
                                <th>PRICE (IGNIS)</th>
                                <th>BID ({{$info["name"]}})</th>
                                <th></th>
                                @elseif(strpos(url()->current(),"ardor") !== "stellar")
                                <th><i class="fa fa-angle-double-right text-green"></i></th>
                                <th>SUM (XLM)</th>
                                <th>TOTAL (XLM)</th>
                                <th>PRICE (XLM)</th>
                                <th>BID ({{$info["name"]}})</th>
                                <th></th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
                <!-- End column-2-left-buy for SELL-->
                <!-- column-2-right-sell for BUY-->
                <div class="col-lg-6  col-md-6 col-sm-6" id="table_ask" style="height: 400px;">
                    <table class="table table-hover box-trade" id="ask" width="100%" cellspacing="0">
                        <thead class="head-column">
                            <tr>
                              @if(strpos(url()->current(),"ardor") !== "ardor")
                              <th></th>
                              <th>ASK ({{$info["name"]}})</th>
                              <th>PRICE (IGNIS)</th>
                              <th>TOTAL (IGNIS)</th>
                              <th>SUM (IGNIS)</th>
                              <th><i class="fa fa-angle-double-left text-red"></i></th>
                              @elseif(strpos(url()->current(),"ardor") !== "stellar")
                              <th></th>
                              <th>ASK ({{$info["name"]}})</th>
                              <th>PRICE (XLM)</th>
                              <th>TOTAL (XLM)</th>
                              <th>SUM (XLM)</th>
                              <th><i class="fa fa-angle-double-left text-red"></i></th>
                              @endif
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
                <!-- column-2-right-sell for BUY-->
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h3 class="text-left" style="margin-bottom: 8px; padding-left: 8px;margin-top: -10px;">My Opens Order</h3>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <!-- My Open Orders -->
                    <table class="table table-hover box-trade" id="oo" width="100%" cellspacing="0">
                        <thead class="head-column">
                            <tr>
                                <th>ORDER</th>
                                @if(strpos(url()->current(),"ardor") !== false)
                                <th>PRICE (IGNIS)</th>
                                <th>AMOUNT ({{$info["name"]}})</th>
                                <th>TOTAL (IGNIS)</th>
                                @else
                                <th>PRICE (XLM)</th>
                                <th>AMOUNT ({{$info["name"]}})</th>
                                <th>TOTAL (XLM)</th>
                                @endif
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                    <!-- End table for open orders -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="text-center" style="margin-bottom: 8px; margin-top: -10px;">Market History</h3>
                    <!-- Market History -->
                    <table class="table table-hover box-trade" id="mh" width="100%" cellspacing="0">
                        <thead class="head-column">
                            <tr>
                                <th>DATE</th>
                                <th>ORDER</th>
                                @if(strpos(url()->current(),"ardor") !== false)
                                <th>PRICE (IGNIS)</th>
                                <th>TOTAL ({{$info["name"]}})</th>
                                <th>TOTAL (IGNIS)</th>
                                @elseif(strpos(url()->current(),"stellar") !== false)
                                <th>PRICE (XLM)</th>
                                <th>TOTAL ({{$info["name"]}})</th>
                                <th>TOTAL (XLM)</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>13:39:05</td>
                                <td class="text-red">SELL</td>
                                <td>0.00003348</td>
                                <td>296.38443478</td>
                                <td>0.00992295</td>
                            </tr>
                            <tr>
                                <td>13:39:05</td>
                                <td class="text-green">BUY</td>
                                <td>0.00003348</td>
                                <td>296.38443478</td>
                                <td>0.00992295</td>
                            </tr>
                            <tr>
                                <td>13:39:05</td>
                                <td class="text-green">BUY</td>
                                <td>0.00003348</td>
                                <td>296.38443478</td>
                                <td>0.00992295</td>
                            </tr>
                            <tr>
                                <td>13:39:05</td>
                                <td class="text-green">BUY</td>
                                <td>0.00003348</td>
                                <td>296.38443478</td>
                                <td>0.00992295</td>
                            </tr>
                            <tr>
                                <td>13:39:05</td>
                                <td class="text-red">SELL</td>
                                <td>0.00003348</td>
                                <td>296.38443478</td>
                                <td>0.00992295</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- End Market History -->
                </div>
                <!-- End column-2-left-buy for market history -->
                <div class="col-lg-6">
                    <h3 class="text-center" style="margin-bottom: 8px;margin-top: -10px;">Your Trade History</h3>
                    <!-- Market History -->
                    <table class="table table-hover box-trade" id="yth" width="100%" cellspacing="0">
                        <thead class="head-column">
                            <tr>
                                <th>CLOSED</th>
                                <th>OPEN</th>
                                @if(strpos(url()->current(),"ardor") !== false)
                                <th>PRICE (IGNIS)</th>
                                <th>FILLED ({{$info["name"]}})</th>
                                <th>RATE (IGNIS)</th>
                                <th>COST (IGNIS)</th>
                                @elseif(strpos(url()->current(),"stellar") !== false)
                                <th>PRICE (XLM)</th>
                                <th>FILLED ({{$info["name"]}})</th>
                                <th>RATE (XLM)</th>
                                <th>COST (XLM)</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                    <!-- End Your History -->
                </div>
                <!-- End column-2-right-sell for trade history -->
            </div>
        </div>
        <!-- End box-body -->
    </div>
    <!-- End Box -->
</div>
<!-- End Box -->
</div>
<!-- End col-lg-10 -->
<div class="col-lg-1 col-md-1 col-sm-1" id="right-layout">
<!-- Row -->
<div class="row show-tablet-ads" style="display: none;">
    <div class="col-lg-3-ads col-md-3 col-sm-3">
        <img src="https://www.mystellar.org/GALLERYALBUM/Stellar/Banner%206%20-%20RESERVED.png" height="50%" width="100%" />
    </div>
    <!-- End col-lg-3 -->
    <div class="col-lg-3-ads col-md-3 col-sm-3">
        <img src="https://www.mystellar.org/GALLERYALBUM/Stellar/Banner%206%20-%20RESERVED.png" height="50%" width="100%" />
    </div>
    <!-- End col-lg-3 -->
    <div class="col-lg-3-ads col-md-3 col-sm-3">
        <img src="https://www.mystellar.org/GALLERYALBUM/Stellar/Banner%206%20-%20RESERVED.png" height="50%" width="100%" />
    </div>
    <!-- End col-lg-3 -->
    <div class="col-lg-3-ads col-md-3 col-sm-3">
        <img src="https://www.mystellar.org/GALLERYALBUM/Stellar/Banner%206%20-%20RESERVED.png" height="50%" width="100%" />
    </div>
    <!-- End col-lg-3 -->
</div>
<!-- End Row -->
<div class="row show-desktop-ads">
    <div class="col-lg-12">
        <a href="">
            <img src="https://www.mystellar.org/GALLERYALBUM/Stellar/Banner%206%20-%20RESERVED.png" width="100%" height="50%">
        </a>
    </div>
    <div class="col-lg-12">
        <a href="">
            <img src="https://www.mystellar.org/GALLERYALBUM/Stellar/Banner%206%20-%20stellar.png" width="100%" height="50%">
        </a>
    </div>
</div>
<div class="box box-danger box-trade" style="margin-bottom: 10px; margin-top: 5px;">
    <div class="box-header with-border" style="padding: 0px;">
        <h3 class="box-title"><b>TROLL BOX</b></h3>
        <div class="pull-right box-tools hide-max" style="margin-top: -5px;">
            <a href="" class="text-red">Full View <i class="fa fa-window-maximize"></i></a>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body" id="scroll-chat">
        <!-- Conversations are loaded here -->
        <div class="message font-10">
            <span data-toggle="tooltip" title="<img src='http://getbootstrap.com/apple-touch-icon.png' width='100' height='100' style='margin-top: 5px'/>
        <h3 class='text-black' style='margin-top: -1px;'>User</h3>
        <p class='text-black text-left' style='margin-top: -15px;'>
        <span class='col-sm-6'>Join Since</span> <span class='col-sm-6'>: <b>12-08-2019</b></span>
        </p>
        <p class='text-black text-left'>
        <span class='col-sm-6'>User Referred</span> <span class='col-sm-6'>: <b>178 Users</b></span>
        </p>
        <p class='text-black text-left'>
        <span class='col-sm-6'>Reward/Post</span> <span class='col-sm-6'>: <b>78 MiST</b></span>
        </p>
        <div class='input-group input-group-sm' style='margin-top: 15px;'>
        <span class='input-group-btn'>
        <div class='input-group margin'>
        <input type='text' class='form-control' placeholder='Give Tip'>
        <div class='input-group-btn'>
        <button type='button' class='btn btn-default dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>MiST
        <span class='fa fa-caret-down'></span></button>
        <ul class='dropdown-menu'>
        <li><a href='#'>CVIT</a></li>
        <li><a href='#'>FRAS</a></li>
        </ul>
        <button class='btn btn-danger text-white'>Send</button>
        </div>
        <!-- /btn-group -->
        </div>
        </span>
        </div>
        "
              class="white-tooltip">
                <img src="dist/img/icon-chat.png">
                <strong style="cursor: pointer;" class="text-red">wanga</strong>
                <!--anchor-->:
            </span>
            <span>is simply dummy text of the printing and typesetting industry.</span>
        </div>
        <div class="message  font-10">
            <img src="dist/img/icon-chat.png">
            <span>
                <strong style="cursor: pointer;" class="text-green">mcafee</strong>
                <!--anchor-->: is simply dummy text of the printing and typesetting industry.
            </span>
        </div>
        <div class="message  font-10">
            <img src="dist/img/icon-chat.png">
            <span>
                <strong style="cursor: pointer;" class="text-red">wanga</strong>
                <!--anchor-->: It has survived not only five centuries, but also the leap into
            </span>
        </div>
        <div class="message  font-10">
            <img src="dist/img/icon-chat.png">
            <span>
                <strong style="cursor: pointer;" class="text-blue">ucok</strong>
                <!--anchor-->: is simply dummy text of the printing and typesetting industry.
            </span>
        </div>
        <div class="message  font-10">
            <img src="dist/img/icon-chat.png">
            <span>
                <strong style="cursor: pointer;" class="text-black">acil</strong>
                <!--anchor-->: It has survived not only five centuries, but also the leap into
            </span>
        </div>
        <div class="message  font-10">
            <img src="dist/img/icon-chat.png">
            <span>
                <strong style="cursor: pointer;" class="text-orange">ana</strong>
                <!--anchor-->: is simply dummy text of the printing and typesetting industry.
            </span>
        </div>
        <div class="message  font-10">
            <img src="dist/img/icon-chat.png">
            <span>
                <strong style="cursor: pointer;" class="text-green">mcafee</strong>
                <!--anchor-->: It has survived not only five centuries, but also the leap into
            </span>
        </div>
        <div class="message  font-10">
            <img src="dist/img/icon-chat.png">
            <span>
                <strong style="cursor: pointer;" class="text-black">acil</strong>
                <!--anchor-->: is simply dummy text of the printing and typesetting industry.
            </span>
        </div>
        <div class="message  font-10">
            <img src="dist/img/icon-chat.png">
            <span>
                <strong style="cursor: pointer;" class="text-blue">ucok</strong>
                <!--anchor-->: It has survived not only five centuries, but also the leap into
            </span>
        </div>
        <div class="message  font-10">
            <img src="dist/img/icon-chat.png">
            <span>
                <strong style="cursor: pointer;" class="text-orange">ana</strong>
                <!--anchor-->: is simply dummy text of the printing and typesetting industry.
            </span>
        </div>
    </div>
    <!--/.direct-chat-messages-->
    <!-- Tabs Choosen Chat Country -->
    <ul class="nav nav-tabs">
        <li class="active">
            <a href="#" class="merge-country-chat">
                <span class="flag-icon flag-icon-gb"></span>
            </a>
        </li>
        <li>
            <a href="#" class="merge-country-chat">
                <span class="flag-icon flag-icon-in"></span>
            </a>
        </li>
        <li>
            <a href="#" class="merge-country-chat">
                <span class="flag-icon flag-icon-ru"></span>
            </a>
        </li>
        <li>
            <a href="#" class="merge-country-chat">
                <span class="flag-icon flag-icon-cn"></span>
            </a>
        </li>
        <li>
            <a href="#" class="merge-country-chat">
                <span class="flag-icon flag-icon-es"></span>
            </a>
        </li>
        <li>
            <a href="#" class="merge-country-chat">
                <span class="flag-icon flag-icon-ae"></span>
            </a>
        </li>
        <li>
            <a href="#" class="merge-country-chat">
                <span class="flag-icon flag-icon-fr"></span>
            </a>
        </li>
        <li>
            <a href="#" class="merge-country-chat">
                <span class="flag-icon flag-icon-id"></span>
            </a>
        </li>
    </ul>
    <!-- Tabs Choosen Chat Country -->
    <div class="box-footer" style="padding: 5px 10px 5px 10px;">
        <form action="#" method="post">
            <div class="input-group input-group-sm">
                <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-danger btn-block">Send</button>
                </span>
            </div>
        </form>
    </div>
    <!-- /.box-footer-->
</div>
<!-- /.box-body -->
<!-- DIRECT CHAT -->
<!-- Advertise -->
<div class="row show-desktop-ads">
    <div class="col-lg-12">
        <a href="">
            <img src="https://www.mystellar.org/GALLERYALBUM/Stellar/Banner%206%20-%20RESERVED.png" width="100%" height="50%">
        </a>
    </div>
    <div class="col-lg-12">
        <a href="">
            <img src="https://www.mystellar.org/GALLERYALBUM/Stellar/Banner%206%20-%20stellar.png" width="100%" height="50%">
        </a>
    </div>
</div>
<!-- End Advertise -->
<!-- Self Advertise -->
<div style="margin: 5px;">
    <button type="button" class="btn btn-warning btn-sm btn-block font-for-head">Self Advertise</button>
</div>
<!-- End Self Advertise -->
<div class="box box-primary" style="margin-bottom: 1px;">
    <div class="box-header with-border" style="padding: 0px;">
        <h3 class="box-title"><b>NOTICES</b></h3>
        <div class="box-tools pull-right" style="margin-top: -5px;">
            <h3 class="box-title font-10">
                <a href="">On Twitter</a>
            </h3>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <ul class="products-list product-list-in-box" id="notice-scroll">
            <li class="item">
                <div class="product-img">
                    <img src="dist/img/default-50x50.gif" alt="Product Image" width="30" height="30">
                </div>
                <div class="product-info">
                    <p class="font-10 text-justify notice">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
            </li>
            <!-- /.item -->
            <li class="item">
                <div class="product-img">
                    <img src="dist/img/default-50x50.gif" alt="Product Image" width="30" height="30">
                </div>
                <div class="product-info">
                    <p class="font-10 text-justify notice">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
            </li>
            <!-- /.item -->
            <li class="item">
                <div class="product-img">
                    <img src="dist/img/default-50x50.gif" alt="Product Image" width="30" height="30">
                </div>
                <div class="product-info">
                    <p class="font-10 text-justify notice">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
            </li>
            <!-- /.item -->
            <li class="item">
                <div class="product-img">
                    <img src="dist/img/default-50x50.gif" alt="Product Image" width="30" height="30">
                </div>
                <div class="product-info">
                    <p class="font-10 text-justify notice">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
            </li>
            <!-- /.item -->
            <li class="item">
                <div class="product-img">
                    <img src="dist/img/default-50x50.gif" alt="Product Image" width="30" height="30">
                </div>
                <div class="product-info">
                    <p class="font-10 text-justify notice">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
            </li>
            <!-- /.item -->
            <li class="item">
                <div class="product-img">
                    <img src="dist/img/default-50x50.gif" alt="Product Image" width="30" height="30">
                </div>
                <div class="product-info">
                    <p class="font-10 text-justify notice">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
            </li>
            <!-- /.item -->
        </ul>
    </div>
    <!-- /.box-body -->
    <div class="box-footer text-center">
        <a href="javascript:void(0)" class="uppercase">View More</a>
    </div>
    <!-- /.box-footer -->
</div>
<!--/.direct-chat -->
</div>
<!-- End col-lg-2 -->
</div>
</section>
<!-- End section .space-upper -->
</div>

@endsection

@section('css')
<link rel="stylesheet" href="{{asset("assets//bower_components/Ionicons/css/ionicons.min.css")}}">
<link rel="stylesheet" type="text/css" href="{{asset("assets//dist/css/menu-asset.css")}}">
<link rel="stylesheet" type="text/css" href="{{asset("assets//dist/css/flag-icon.css")}}">
@endsection
@section('js')
<script src="{{asset("assets//dist/js/chat-function.js")}}"></script>
<!-- Scroll Setup List -->
<script src="{{asset("assets/dist/js/scroll-list-trade.js")}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset("assets/dist/js/demo.js")}}"></script>
<!-- Dropdown Hover -->
<script src="{{asset("assets/dist/js/dropdown-hover.js")}}"></script>
<!-- Effect Trade Maximize or Minimoze -->
<script src="{{asset("assets/dist/js/trade-screen.js")}}"></script>
<!-- Favorite Asset Trade -->
<script src="{{asset("assets/dist/js/fav-asset-trade.js")}}"></script>
<!-- Pagination Setup Trade -->
<script src="{{asset("assets/dist/js/setup-table.js")}}"></script>
<script type="text/javascript">
  $(document).ready(function() {
    function loadasset(start,length,append=false) {
      $.get("{{url("api/token_sidebar/ardor")}}?start="+start+"&length="+length,function(success){
        if (append) {
          $("#asset").append(success);
        }else {
          $("#asset").html(success);
        }
      }).fail(function (fail) {
        alert = fail.responseJSON;
        console.log(alert.message);
        toastr.error(alert.message);
        $.each(alert.errors,function(index, el) {
          toastr.info(el[0]);
        });
      });
    }
    loadasset(0,10000);
    setTimeout(function(){
      $("body").addClass("sidebar-collapse");//ganti attribute dokumentasi jquery
        $("#icon-setup").attr("src","{{asset("assets/dist/img/button/btn-show.png")}}");
         $("#btn-token").css('width', '95%');
         $("#btn-fiat").css('width', '95%');
         $("#btn-fiat").css('margin-top', '5px');

        $('.hide-mini').css('display', 'none');
        $('.back-margin-left').css('margin-left', '0px');
        $('.logo-icon').css('margin-left', '0px');
        $('#s-h').text('HIDE');
                if ($(window).innerWidth() <= 996) {
                   $('.hide-max').css('display', 'none');
                   $('.col-lg-11').css('width', '95%');
                   $('.col-lg-1').css('width', '2%');

                   $('.col-sm-2').css('width', '15%');
                }


                else if ($(window).innerWidth() <= 1024) {
                   $('.col-lg-11').css('width', '78%');
                   $('.col-lg-1').css('width', '19%');
                }

                else if ($(window).innerWidth() <= 1360) {
                   $('.col-lg-11').css('width', '78.5%');
                   $('.col-lg-1').css('width', '19%');
                 }
                else if ($(window).innerWidth() <= 7680) {
                   $('.col-lg-11').css('width', '81.7%');
                   $('.col-lg-1').css('width', '16.5%');
                }

      $('#asset').slimScroll({
         height: 'calc(100vh - 240px)'
       });
    }, 2000);// 5 detik
    $("#icon-setup").click(function(e) {
    e.preventDefault();
        if ($("#icon-setup").hasClass('hide-btn')){
             $("#icon-setup").addClass('show-btn');
             $("#icon-setup").removeClass('hide-btn');
             $("#icon-setup").attr("src","{{asset("assets/dist/img/button/btn-show.png")}}");

             $("#btn-token").css('width', '25%');
             $("#btn-fiat").css('width', '25%');
             $("#btn-fiat").css('margin-top', '0');
        }
        else{
             $("#icon-setup").addClass('hide-btn');
             $("#icon-setup").removeClass('show-btn');
             $("#icon-setup").attr("src","{{asset("assets/dist/img/button/btn-hide.png")}}");

             $("#btn-token").css('width', '95%');
             $("#btn-fiat").css('width', '95%');
             $("#btn-fiat").css('margin-top', '5px');
        }
    });
    $('span[data-toggle="tooltip"]').tooltip({
       trigger: 'click',
       animated: 'fade',
       placement: 'bottom',
       html: true
    });
    $("#modal-ajax").on('click',"a[data-window='external']", function() {
          window.open($(this).attr('href'));
          return false;
    });
    $("#change-asset").click(function(){
       $("#base-asset").attr("id","counter-asset");
       $("#counter-asset").attr("id","base-asset");
    });
    $("#base-asset").click(function(){
       $("#content-base").toggle();
     });
    $("#counter-asset").click(function(){
       $("#content-counter").toggle();
    });
    $("#chartdiv").hide();
    $("#btn-depth").click(function(){
       $("#chartdiv").show();

       $('#info-asset').slimScroll({destroy: true});

       $("#info-asset").hide();

    });
    $('#bid').DataTable({
      "scrollY"     : "320px",
      "destroy":true,
      'paging'      : true,
      'searching'   : false,
      'ajax'         :"{{url("api/orderbook/".$block."/".$info["id_token"])."?type=buy"}}",
      'info'        : false,
      'lengthChange': false,
      'createdRow': function (row, data, index) {
        console.log(data);
      },
      "pageLength"  : 15,
      'pagingType'  : 'full_numbers',
      'responsive'  : true,
      "dom": '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
      'autoWidth'   : false
    })
    $('#ask').DataTable({
      "scrollY"     : "320px",
      "destroy":true,
      'paging'      : true,
      'searching'   : false,
      'info'        : false,
      'ajax'         :"{{url("api/orderbook/".$block."/".$info["id_token"])."?type=sell"}}",
      'lengthChange': false,
      "pageLength"  : 15,
      'pagingType'  : 'full_numbers',
      'responsive'  : true,
      "dom": '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
      'autoWidth'   : false
    })
    $('#mh').DataTable({
      'paging'      : true,
      "destroy":true,
      'ajax'         :"{{url("api/historyardor/".$info["id_token"])."/".date("Y-m-d")."?type=all"}}",
      'searching'   : false,
      'info'        : false,
      'ordering'    : true,
      'lengthChange': false,
      "pageLength"  : 15,
      'pagingType'  : 'full_numbers',
      'responsive'  : true,
      "dom": '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
      'autoWidth'   : false
    })
    $('#oo').DataTable({
      'paging'      : true,
      "destroy":true,
      'searching'   : false,
      'info'        : false,
      'ordering'    : true,
      'lengthChange': false,
      'ajax'         :"{{url("api/myorderardor/".$info["id_token"])}}",
      'pagingType'  : 'full_numbers',
      'responsive'  : true,
      "dom": '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
      'autoWidth'   : false
    })
    $('#moo').DataTable({
      'paging'      : true,
      'searching'   : false,
      'info'        : false,
      "destroy":true,
      'ordering'    : true,
      'lengthChange': false,
       'pagingType'  : 'full_numbers',
      'responsive'  : true,
      "dom": '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
      'autoWidth'   : false
    })
    $('#ro').DataTable({
      'paging'      : true,
      'searching'   : true,
      "destroy":true,
      'info'        : false,
      'ordering'    : true,
      'lengthChange': false,
       'pagingType'  : 'full_numbers',
      'responsive'  : true,
      "dom": '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
      'autoWidth'   : false
    })
    $('#yth').DataTable({
      'paging'      : true,
      'searching'   : false,
      "destroy":true,
      'ajax'         :"{{url("api/historyardor/".$info["id_token"])."/".date("Y-m-d")."?type=self"}}",
      'info'        : false,
      'ordering'    : true,
      'lengthChange': false,
      "pageLength"  : 15,
       'pagingType'  : 'full_numbers',
      'responsive'  : true,
      "dom": '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
      'autoWidth'   : false
    })
    $('#transferHistoryTable').DataTable({
      'paging'      : true,
      'searching'   : false,
      'info'        : false,
      'ordering'    : true,
      "destroy":true,
      "pageLength"  : 15,
      'lengthChange': false,
       'pagingType'  : 'full_numbers',
      'responsive'  : true,
      "dom": '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
      'autoWidth'   : false
    })
   $('#balanceTable').DataTable({
     'paging'      : false,
     'searching'   : true,
     "destroy":true,
     'info'        : false,
     'lengthChange': false,
     'pagingType'  : 'full_numbers',
     'responsive'  : true,
     "dom": '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
     'autoWidth'   : false
   })
  });
</script>
<!-- Login/Register Modal Popup -->
@endsection
