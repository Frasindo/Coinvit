@extends("layout.app")
@section("title","Coinvit DEX")
@section("content")
<!-- Left side column. contains the logo and sidebar -->
<section style="width: 100%;">
   <div class="jumbotron text-center hideline-asset" style=" height: 210%;  color: #fff; background-color: #273239;">
      <p style="font-size: 64px; font-weight: 700;">Welcome to <img src="{{asset("logo/logocoinvit.png")}}" class="logo-coinvit-market">
      </h1>
      <p class="lead">The Exchange Free.</p>
      <div style="margin-right: 8px; margin-left: 8px;">
         <button type="button" class="btn btn-lg btn-market-lr btn-warning">Login / Register</button>
         <button type="button" class="btn btn-lg btn-market-lr btn-warning" data-toggle="modal" data-target="#modal-lr">Exchange</button>
         <!-- END Choose Asset TOKEN / FIAT -->
      </div>
   </div>
   <div class="box">
   <div class="box-header hideline-asset" style=" margin-top: -35px; background-color: #273239;">
      <div class="row">
         <div class="col-lg-3-ads col-md-3 col-sm-3">
            <img src="//www.mystellar.org/GALLERYALBUM/Stellar/Banner%206%20-%20RESERVED.png" height="50%" width="100%" />
         </div>
         <!-- End col-lg-3 -->
         <div class="col-lg-3-ads col-md-3 col-sm-3">
            <img src="//www.mystellar.org/GALLERYALBUM/Stellar/Banner%206%20-%20RESERVED.png" height="50%" width="100%" />
         </div>
         <!-- End col-lg-3 -->
         <div class="col-lg-3-ads col-md-3 col-sm-3">
            <img src="//www.mystellar.org/GALLERYALBUM/Stellar/Banner%206%20-%20RESERVED.png" height="50%" width="100%" />
         </div>
         <!-- End col-lg-3 -->
         <div class="col-lg-3-ads col-md-3 col-sm-3">
            <img src="//www.mystellar.org/GALLERYALBUM/Stellar/Banner%206%20-%20RESERVED.png" height="50%" width="100%" />
         </div>
         <!-- End col-lg-3 -->
      </div>
      <!-- End Row -->
   </div>
   <!-- /.box-header -->
   <div class="box-body higt-asset">
      <div class="row text-center">
         <div class="col-lg-4 col-md-4 col-sm-4">
            <p class="name-asset">Bitcoin (BTC)</p>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-5">
            <div class="col-lg-6 col-md-6 col-sm-6 text-left">
               <p class="for-twentyfive space-an">Last Price:</p>
               <p class="for-twentyfive space-an">24hr Volume:</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 text-left">
               <p class="for-twentyfive">0.99600000 USD</p>
               <p class="for-twentyfive">1295170.80 USD</p>
            </div>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-3">
            <img src="//bittrexblobstorage.blob.core.windows.net/public/ddbdafb2-e267-4114-abc3-06316cf3bef9.png" class="img-logo-asset-exchange">
         </div>
      </div>
   </div>
   <!-- ./box-body -->
   <div class="box-footer hideline-asset">
      <div class="row">
         <div class="col-lg-3-ads col-md-3 col-sm-3">
            <img src="//bittrexblobstorage.blob.core.windows.net/public/ddbdafb2-e267-4114-abc3-06316cf3bef9.png" class="market-icon">
            <div class="text-right tablet-view-asset" style="margin-right: 8px;">
               <p style="color: #c3c3c3;" class="space-an">Top Volume</p>
               <p style="font-size: 1.250em;" class="space-an">Bitcon (BTC)</p>
               <p style="font-size: 1.250em; font-weight: bold;" class="space-an">625971.56 USD</p>
               <p style="font-size: 0.938em;" class="text-red asset-komp space-an"><i class="fa fa-caret-down"></i> 0.8%</p>
            </div>
         </div>
         <div class="col-lg-3-ads col-md-3 col-sm-3">
            <img src="//bittrexblobstorage.blob.core.windows.net/public/ddbdafb2-e267-4114-abc3-06316cf3bef9.png" class="market-icon">
            <div class="text-right tablet-view-asset" style="margin-right: 8px;">
               <p style="color: #c3c3c3;" class="space-an">Top Volume</p>
               <p style="font-size: 1.250em;" class="space-an">Bitcon (BTC)</p>
               <p style="font-size: 1.250em; font-weight: bold;" class="space-an">625971.56 USD</p>
               <p style="font-size: 0.938em;" class="text-red asset-komp space-an"><i class="fa fa-caret-down"></i> 0.8%</p>
            </div>
         </div>
         <div class="col-lg-3-ads col-md-3 col-sm-3">
            <img src="//bittrexblobstorage.blob.core.windows.net/public/ddbdafb2-e267-4114-abc3-06316cf3bef9.png" class="market-icon">
            <div class="text-right tablet-view-asset" style="margin-right: 8px;">
               <p style="color: #c3c3c3;" class="space-an">Top Volume</p>
               <p style="font-size: 1.250em;" class="space-an">Bitcon (BTC)</p>
               <p style="font-size: 1.250em; font-weight: bold;" class="space-an">625971.56 USD</p>
               <p style="font-size: 0.938em;" class="text-red asset-komp space-an"><i class="fa fa-caret-down"></i> 0.8%</p>
            </div>
         </div>
         <div class="col-lg-3-ads col-md-3 col-sm-3">
            <img src="//bittrexblobstorage.blob.core.windows.net/public/ddbdafb2-e267-4114-abc3-06316cf3bef9.png" class="market-icon">
            <div class="text-right tablet-view-asset" style="margin-right: 8px;">
               <p style="color: #c3c3c3;" class="space-an">Top Volume</p>
               <p style="font-size: 1.250em;" class="space-an">Bitcon (BTC)</p>
               <p style="font-size: 1.250em; font-weight: bold;" class="space-an">625971.56 USD</p>
               <p style="font-size: 0.938em;" class="text-red asset-komp space-an"><i class="fa fa-caret-down"></i> 0.8%</p>
            </div>
         </div>
      </div>
      <!-- /.box-footer -->
   </div>
   <!-- /.box -->
   <div class="card hideline-asset">
      <div class="nav-tabs-custom box-market">
         <ul class="nav nav-tabs" role="tablist">
            <!-- Favorites Asset -->
            <li role="presentation">
               <a href="#fav" aria-controls="favorite" role="tab" data-toggle="tab">
               <i class="fa fa-star text-yellow"></i>
               Favorites
               </a>
            </li>
            <!-- END Favorites Asset -->
            <!-- Asset Tab -->
            <li role="presentation">
               <a href="#xlm" aria-controls="xlm" role="tab" data-toggle="tab">Stellar</a>
            </li>
            <li role="presentation">
               <a href="#ardor" aria-controls="ardor" role="tab" data-toggle="tab">ARDOR</a>
            </li>
            <li role="presentation">
               <a href="#btc" aria-controls="btc" role="tab" data-toggle="tab">Bitcoin</a>
            </li>
            <li role="presentation">
               <a href="#eth" aria-controls="eth" role="tab" data-toggle="tab">Ethereum</a>
            </li>
            <li role="presentation">
               <a href="#usdt" aria-controls="eth" role="tab" data-toggle="tab">USDT</a>
            </li>
            <!-- END Asset Tab -->
            <!-- Search Asset -->
            <li class="pull-right">
               <input type="text" name="" style="margin: 3px; padding: 3px; border: 1px solid #999999;     border-radius: 4px;" placeholder="Search">
            </li>
            <!-- END Search Asset -->
         </ul>
         <div class="tab-content">
            <div role="tabpanel" class="tab-pane" id="fav">
               <!-- Market History -->
               <table class="table table-hover">
                  <thead>
                     <tr>
                        <th style="width: 25px;"></th>
                        <th style="width: 145px;">MARKET</th>
                        <th style="width: 150px;">CURRENCY</th>
                        <th style="width: 150px;">VOLUME</th>
                        <th style="width: 142px;">% CHANGE</th>
                        <th style="width: 145px;">LAST PRICE</th>
                        <th style="width: 165px;">24HR HIGH</th>
                        <th style="width: 160px;">24HR LOW</th>
                        <th style="width: 155px;">% SPREAD</th>
                        <th style="width: 150px;">ADDED</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr id="fav-asset">
                        <td><i class="fa fa-star text-yellow"></i></td>
                        <td style="width: 150px;">FRAS-XLM</td>
                        <td style="width: 150px;">Frasindo Rent</td>
                        <td style="width: 150px;">1286578.70</td>
                        <td class="text-red" style="width: 150px;">-0.1 <i class="fa fa-caret-down"></i></td>
                        <td style="width: 150px;">7154.88900000</td>
                        <td style="width: 165px;">7325.00000000</td>
                        <td style="width: 165px;">7011.00000000</td>
                        <td style="width: 160px;">0.0</td>
                        <td style="width: 160px;">05/31/2018</td>
                     </tr>
                     <tr id="fav-asset">
                        <td><i class="fa fa-star text-yellow"></i></td>
                        <td style="width: 150px;">BTC-USDT</td>
                        <td style="width: 150px;">Bitcoin</td>
                        <td style="width: 150px;">1286578.70</td>
                        <td class="text-red" style="width: 150px;">-0.1 <i class="fa fa-caret-down"></i></td>
                        <td style="width: 150px;">7154.88900000</td>
                        <td style="width: 165px;">7325.00000000</td>
                        <td style="width: 165px;">7011.00000000</td>
                        <td style="width: 160px;">0.0</td>
                        <td style="width: 160px;">05/31/2018</td>
                     </tr>
                     <tr id="fav-asset">
                        <td><i class="fa fa-star text-yellow"></i></td>
                        <td style="width: 150px;">XLM-BTC</td>
                        <td style="width: 150px;">Stellar Lumens</td>
                        <td style="width: 150px;">1286578.70</td>
                        <td class="text-red" style="width: 150px;">-0.1 <i class="fa fa-caret-down"></i></td>
                        <td style="width: 150px;">7154.88900000</td>
                        <td style="width: 165px;">7325.00000000</td>
                        <td style="width: 165px;">7011.00000000</td>
                        <td style="width: 160px;">0.0</td>
                        <td style="width: 160px;">05/31/2018</td>
                     </tr>
                     <tr id="fav-asset">
                        <td><i class="fa fa-star text-yellow"></i></td>
                        <td style="width: 150px;">WARNA-XLM</td>
                        <td style="width: 150px;">Warnamu</td>
                        <td style="width: 150px;">1286578.70</td>
                        <td class="text-red" style="width: 150px;">-0.1 <i class="fa fa-caret-down"></i></td>
                        <td style="width: 150px;">7154.88900000</td>
                        <td style="width: 165px;">7325.00000000</td>
                        <td style="width: 165px;">7011.00000000</td>
                        <td style="width: 160px;">0.0</td>
                        <td style="width: 160px;">05/31/2018</td>
                     </tr>
                  </tbody>
               </table>
               <!-- End Market History -->
            </div>
            <!-- End tab-pane -->
            <div role="tabpanel" class="tab-pane active" id="xlm">
               <!-- Choose Asset TOKEN / FIAT -->
               <div class="text-center">
                  <!-- Image hover -->
                  <!-- <img src="dist/img/button/btn-token-hover.png" class="btn-token"> -->
                  <img src="{{asset("dist/img/button/btn-token.png")}}" class="btn-token">

                  <!-- Image Hover -->
                  <!-- <img src="dist/img/button/btn-fiat-hover.png" class="btn-fiat"> -->
                  <img src="{{asset("dist/img/button/btn-fiat.png")}}" class="btn-fiat">
                  <!-- END Choose Asset TOKEN / FIAT -->
               </div>
               <!-- Market History -->
               <table class="table table-hover" id="coin-asset">
                  <thead>
                     <tr>
                        <th style="width: 25px;"></th>
                        <th style="width: 145px;">MARKET</th>
                        <th style="width: 150px;">CURRENCY</th>
                        <th style="width: 150px;">VOLUME</th>
                        <th style="width: 142px;">% CHANGE</th>
                        <th style="width: 145px;">LAST PRICE</th>
                        <th style="width: 165px;">24HR HIGH</th>
                        <th style="width: 160px;">24HR LOW</th>
                        <th style="width: 155px;">% SPREAD</th>
                        <th style="width: 150px;">ADDED</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr data-href="trade.html">
                        <td class="cc" id="cc"><span><i class="fa fa-star-o text-yellow"></i></span></td>
                        <td style="width: 150px;">FRAS-XLM</td>
                        <td style="width: 150px;"><img src="//bittrexblobstorage.blob.core.windows.net/public/ddbdafb2-e267-4114-abc3-06316cf3bef9.png" style="width: 20px; height: 20px;margin-right: 5px;" class="logo-icon"> Frasindo Rent</td>
                        <td style="width: 150px;">1286578.70</td>
                        <td class="text-red" style="width: 150px;">-0.1 <i class="fa fa-caret-down"></i></td>
                        <td style="width: 150px;">7154.88900000</td>
                        <td style="width: 165px;">7325.00000000</td>
                        <td style="width: 165px;">7011.00000000</td>
                        <td style="width: 160px;">0.0</td>
                        <td style="width: 160px;">05/31/2018</td>
                     </tr>
                     <tr>
                        <td class="cc" id="cc"><span><i class="fa fa-star-o text-yellow"></i></span></td>
                        <td style="width: 150px;">USD-BTC</td>
                        <td style="width: 150px;"><img src="//bittrexblobstorage.blob.core.windows.net/public/ddbdafb2-e267-4114-abc3-06316cf3bef9.png" style="width: 20px; height: 20px;margin-right: 5px;" class="logo-icon"> Bitcoin</td>
                        <td style="width: 150px;">1286578.70</td>
                        <td class="text-red" style="width: 150px;">-0.1 <i class="fa fa-caret-down"></i></td>
                        <td style="width: 150px;">7154.88900000</td>
                        <td style="width: 165px;">7325.00000000</td>
                        <td style="width: 165px;">7011.00000000</td>
                        <td style="width: 160px;">0.0</td>
                        <td style="width: 160px;">05/31/2018</td>
                     </tr>
                     <tr>
                        <td class="cc" id="cc"><span><i class="fa fa-star-o text-yellow"></i></span></td>
                        <td style="width: 150px;">USD-BTC</td>
                        <td style="width: 150px;"><img src="//bittrexblobstorage.blob.core.windows.net/public/ddbdafb2-e267-4114-abc3-06316cf3bef9.png" style="width: 20px; height: 20px;margin-right: 5px;" class="logo-icon"> Bitcoin</td>
                        <td style="width: 150px;">1286578.70</td>
                        <td class="text-red" style="width: 150px;">-0.1 <i class="fa fa-caret-down"></i></td>
                        <td style="width: 150px;">7154.88900000</td>
                        <td style="width: 165px;">7325.00000000</td>
                        <td style="width: 165px;">7011.00000000</td>
                        <td style="width: 160px;">0.0</td>
                        <td style="width: 160px;">05/31/2018</td>
                     </tr>
                     <tr>
                        <td class="cc" id="cc"><span><i class="fa fa-star-o text-yellow"></i></span></td>
                        <td style="width: 150px;">USD-BTC</td>
                        <td style="width: 150px;"><img src="//bittrexblobstorage.blob.core.windows.net/public/ddbdafb2-e267-4114-abc3-06316cf3bef9.png" style="width: 20px; height: 20px;margin-right: 5px;" class="logo-icon"> Bitcoin</td>
                        <td style="width: 150px;">1286578.70</td>
                        <td class="text-red" style="width: 150px;">-0.1 <i class="fa fa-caret-down"></i></td>
                        <td style="width: 150px;">7154.88900000</td>
                        <td style="width: 165px;">7325.00000000</td>
                        <td style="width: 165px;">7011.00000000</td>
                        <td style="width: 160px;">0.0</td>
                        <td style="width: 160px;">05/31/2018</td>
                     </tr>
                     <tr>
                        <td class="cc" id="cc"><span><i class="fa fa-star-o text-yellow"></i></span></td>
                        <td style="width: 150px;">USD-BTC</td>
                        <td style="width: 150px;"><img src="//bittrexblobstorage.blob.core.windows.net/public/ddbdafb2-e267-4114-abc3-06316cf3bef9.png" style="width: 20px; height: 20px;margin-right: 5px;" class="logo-icon"> Bitcoin</td>
                        <td style="width: 150px;">1286578.70</td>
                        <td class="text-red" style="width: 150px;">-0.1 <i class="fa fa-caret-down"></i></td>
                        <td style="width: 150px;">7154.88900000</td>
                        <td style="width: 165px;">7325.00000000</td>
                        <td style="width: 165px;">7011.00000000</td>
                        <td style="width: 160px;">0.0</td>
                        <td style="width: 160px;">05/31/2018</td>
                     </tr>
                  </tbody>
               </table>
               <!-- End Market History -->
            </div>
            <!-- End tab-pane -->
            <div role="tabpanel" class="tab-pane" id="btc">
            </div>
            <!-- End tab-pane -->
            <div role="tabpanel" class="tab-pane" id="eth">
            </div>
            <!-- End tab-pane -->
            <div role="tabpanel" class="tab-pane" id="xlm">
            </div>
            <!-- End tab-pane -->
         </div>
         <!-- End tab-content -->
      </div>
      <!-- End tabs-custom -->
   </div>
   <!-- End card -->
   <!-- ./box-body -->
   <div class="box-footer hideline-asset">
      <div class="row">
         <div class="col-lg-3-ads col-md-3 col-sm-3">
            <img src="//www.mystellar.org/GALLERYALBUM/Stellar/Banner%206%20-%20RESERVED.png" height="100%" width="100%" />
         </div>
         <!-- End col-lg-3 -->
         <div class="col-lg-3-ads col-md-3 col-sm-3">
            <img src="//www.mystellar.org/GALLERYALBUM/Stellar/Banner%206%20-%20RESERVED.png" height="100%" width="100%" />
         </div>
         <!-- End col-lg-3 -->
         <div class="col-lg-3-ads col-md-3 col-sm-3">
            <img src="//www.mystellar.org/GALLERYALBUM/Stellar/Banner%206%20-%20RESERVED.png" height="100%" width="100%" />
         </div>
         <!-- End col-lg-3 -->
         <div class="col-lg-3-ads col-md-3 col-sm-3">
            <img src="//www.mystellar.org/GALLERYALBUM/Stellar/Banner%206%20-%20RESERVED.png" height="100%" width="100%" />
         </div>
         <!-- End col-lg-3 -->
      </div>
      <!-- End Row -->
   </div>
   <!-- /.box-footer -->
</section>
<!-- Footer -->
@endsection
@section("css")

@endsection
@section("js")
<script type="text/javascript">
   $(document).ready(function()
   {
      $("#slider1").tinycarousel({
         interval: true,
         axis   : "y"
       });
      $("#slider2").tinycarousel({
         interval: true,
         axis   : "y"
       });
      $("#slider3").tinycarousel({
         interval: true,
         axis   : "y"
       });
      $("#slider4").tinycarousel({
         interval: true,
         axis   : "y"
       });


      $('#coin-asset').on( 'click', 'tbody tr', function () {
        window.location.href = $(this).data('href');
      });
   });
</script>
@endsection
