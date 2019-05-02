<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/css/swiper.min.css">
  <!-- <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" /> -->
  <link rel="stylesheet" href="css/stellar2.css" id="themechange">
  <link rel="stylesheet" href="dist/css/AdminLTE.css">

    <title>Coinvit</title>
          
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="m-homepage.php">
        <img src="../logo/logocoinvit.png" width="100" height="30">
      </a>
      <a href="" class="navbar-brand ml-auto" id="" data-toggle="modal" data-target="#modal-lr">Login | Register</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0 text-white">
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-th"></i></a>
  <div class="dropdown-menu">
    <a class="dropdown-item" tabindex="-1" href="#">
        <i class="fas fa-balance-scale"></i>
        Exchange<br>
        <small class="text-monospace">Crypto Asset Exchange</small>
    </a>
    <a class="dropdown-item" tabindex="-1" href="#">
        <i class="fas fa-graduation-cap"></i>
        Academy<br>
        <small class="text-monospace">Blockchain & Crypto</small>
    </a>
    <a class="dropdown-item" tabindex="-1" href="#">
        <i class="fas fa-book-open"></i>
        Education<br>
        <small class="text-monospace">Education Blockchain & Crypto</small>
    </a>
    <a class="dropdown-item" tabindex="-1" href="#">
        <i class="fas fa-newspaper"></i>
        Crypto News<br>
        <small class="text-monospace">Self Publication News</small>
    </a>
    <a class="dropdown-item" tabindex="-1" href="#">
        <i class="far fa-newspaper"></i>
        PORTAL<br>
        <small class="text-monospace">Self Publication News</small>
    </a>
    <a class="dropdown-item" tabindex="-1" href="#">
        <i class="fas fa-users"></i>
        Education<br>
        <small class="text-monospace">Crypto ANN, Hangout</small>
    </a>
    </div>
  </li>
      <li class="nav-item ">
        <a class="nav-link" href="m-market.php">Markets <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="m-stellar.php">Exchange</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Decentralize</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" tabindex="-1" href="#">Generate new wallet</a>
      <a class="dropdown-item" tabindex="-1" href="#">Login with your own private key</a>
      </div>
      </li>
      <li class="nav-item dropdown">
          <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Centralize</a>
          <div class="dropdown-menu">
      <a class="dropdown-item" tabindex="-1" href="/mobile/balance/">Coinvit Deposit Withdrawal</a>
      <a class="dropdown-item" tabindex="-1" href="#">BUY CRYPTO with CREDIT CARD</a>
      </div>
      </li>
      <li class="nav-item my-2 mr-2">
        <a href="#">
                <img src="https://upload.wikimedia.org/wikipedia/commons/d/db/Google_Translate_Icon.png" width="20" height="20">    
              </a>
      </li>
      <li class="nav-item my-2 changetheme">
        <button href="" class="bg-transparent border-less" style="border: none; color: white;">
                <i class="fas fa-sun"></i>    
              </button>
      </li>
      <li class="nav-item my-2 changetheme1" style="display: none;">
        <button href="" class="bg-transparent border-less" style="border: none; color: black;">
                <i class="fas fa-moon"></i>    
              </button>
      </li>
      <li class="nav-item my-2">
    <a href="/mobile/setting/">
      <i class="fas fa-cogs"></i>    
          </a>
  </li>
      <li class="nav-item my-2">
        <a href="#">
                <i class="fa fa-wifi text-green"></i>    
              </a>
      </li>
    </ul>
    
  </div>
</nav>
<!-- end navbar -->
<!-- content -->
<ul class="nav nav-justified nav-fill font2" id="pills-tab nav1" role="tablist">
  <li class="nav-item text-dark">
    <a class="nav-link active" id="pills-charts-tab" data-toggle="pill" href="#pills-charts" role="tab" aria-controls="pills-charts" aria-selected="true">Chart</a>

  </li>
  <li class="nav-item">
    <a class="nav-link " id="pills-trade-tab" data-toggle="pill" href="#pills-trade" role="tab" aria-controls="pills-trade" aria-selected="false">Trade</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-order-tab" data-toggle="pill" href="#pills-order" role="tab" aria-controls="pills-order" aria-selected="false">Open Order</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-chat-tab" data-toggle="pill" href="#pills-chat" role="tab" aria-controls="pills-chat" aria-selected="false">Troll Box</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade  show active" id="pills-charts" role="tabpanel" aria-labelledby="pills-charts-tab">
    <div class="container-fluid " id="head1">
      <div class="row">
        <div class="col-8">
          <a href="" class="mt-2 py-0 clrchange0" style="font-size: 22px; color: orange">
            <img src="../logo/btc.png" alt="btc" style="height: 40px; width: 40px">BNB/BTC 
            <i class="fas fa-arrow-up" style="font-size: 16px; color: green">7,32%</i>
          </a>
          <p class="m-0 py-0 clrchange" style="font-size: 22px; color: red;">0.0014915 <span id="span1" style="font-size: 13px; color: white">$9.53</span></p>
          <p class="mx-0 py-0 mt-1" style="font-size: 16px;">Vol 1,129.28 BTC</p>

        </div>
        <div class="col-4 text-right">
          <button class="btn my-1 clrchange1" style="background-color: #f69022;" data-toggle="modal" data-target="#typecoin2">Choose Coin</button>
          <div class="w-100"></div>
          <button class="btn btn-outline-secondary my-1" type="button"><i class="far fa-star">Favorites</i>
          </button>
          <p class="mx-0 mt-0 mb-1">High 0,00014964</p>
          <p class="m-0">Low 0,00014755</p>
        </div>
      </div>
    </div>
    <div class="container-fluid con2 p-0">
      <div class="row">
        <div class="col-12">
          <button class="btn btn-outline-light candlewidget">Candle</button>
              <div class="w-100"></div>
        <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
              <button class="btn btn-outline-light depthwidget">Depth</button>
              <div class="w-100"></div>
              <div id="tradingview_ed7fb"></div>
              <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/COINBASE-BTCUSD/" rel="noopener" target="_blank">
              <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
              <script type="text/javascript">
              new TradingView.widget(
              {
              "width": "auto",
              "height": 300,
              "symbol": "COINBASE:BTCUSD",
              "interval": "D",
              "timezone": "Etc/UTC",
              "theme": "Dark",
              "style": "1",
              "locale": "en",
              "toolbar_bg": "rgba(66, 66, 66, 1)",
              "enable_publishing": false,
              "hide_legend": true,
              "save_image": false,
              "container_id": "tradingview_ed7fb"
            }
              );
              </script>
            </div>
          </div>
            <!-- TradingView Widget END -->
        <div id="chartdiv"></div>
      </div>
    </div>
       
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="tabtable0">
          <h4 class="h4" style="color: #DFDFDF; border-bottom: none">Trade History</h4>
          <div class="w-100"></div>
          <table class="table table-sm" cellspacing="0" style="background-color: 

#fff; font-size: 13px; color: #fff">
                  <thead class="thead1" style="background-image: linear-gradient(to right, magenta, turquoise 80%)">
                    <tr>
                      <th>Price</th>
                      <th>Status</th>
                      <th>Amount</th>
                      <th>Minutes</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php
                      for ($i=0; $i <10; $i++) {?> 
                      <tr style="background-color: #2B3441">
                        <td>0,00014833</td>
                        <?php if ($i%2 == 0) {
                            echo "<td style='color: red;'>Sell</td>";                          
                        }else{
                          echo "<td style='color: green'>Buy</td>";
                        } ?>
                        <td>6.74</td>
                        <td><?php  echo date("i:s");?></td>                           
                      </tr>   
                    <?php
                      } 
                   ?>
                  </tbody>
                </table>
                </div>
                </div>
    </div>
        </div>
          </div>
        </div>
  <div class="tab-pane fade" id="pills-trade" role="tabpanel" aria-labelledby="pills-trade-tab">   
    <div class="container-fluid pb-3">
        <div class="row">
          <!-- col -->
          <div class="col-6 mt-2">
            <img src="../logo/btc.png" alt="btc" style="height: 90px; width: 90px;">
            <div class="kotak" style="display: inline-block; height: 90px">
            <button class="btn px-1 clrchange1" style="background-color: #f69022;font-size: .9em" >Choose Coin</button>
            <a href=""style="font-size: 20px; color: #f69022; display: block" class="clrchange0">BNB/BTC</a>
            </div>
              <!-- <i class="fas fa-caret-down" style="color: black"></i> -->
              <div class="w-100"></div>
              <div class="btn-group" role="group" aria-label="basic example" style=" width:100%;">
                <button type="button" class="btn1">Buy</button>
                <button type="button" class="btn2">Sell</button>
              </div>
                <form action="" class="px-2 mt-2" style="font-size: 14px;">
                     <div class="form-group">
                        <label for="quantity">You Have =  200,000.12345678 BNB</label>
                          <div class="d-flex bd-highlight">
                          <input type="number" class="form-control p-2 bd-highlight" id="quantity" placeholder="BNB Quantity" style="width: 95%">
                          <button class="btn p-1 bd-highlight clrchange1" type="button" id="max" style="background-color: #f69022;">Max</button>
                      </div>
                      </div>
                      <div class="form-group mb-2">
                        <label for="price">Price</label>
                        <div class="d-flex bd-highlight">
                          <input type="number" class="form-control" id="price" placeholder="BTC">
                      </div>
                    </div>
                      <div class="form-group">
                        <label for="total">Total</label>
                        <div class="d-flex bd-highlight">
                          <input type="number" class="form-control" id="total" placeholder="BTC">
                      </div>
                      </div>
                  </form>
                  <button class="btn btn-success buttonbuysell mb-3" type="submit" style="width: 100%;">BUY</button>
                  <a href="">
              <img src="https://www.mystellar.org/GALLERYALBUM/Stellar/Banner%206%20-%20RESERVED.png" width="100%" height="75">
            </a>
            <a href="">
              <img src="https://www.mystellar.org/GALLERYALBUM/Stellar/Banner%206%20-%20RESERVED.png" width="100%" height="75">
            </a>
                </div>
                <!-- end col -->

                
               <!-- col -->
                   <div class="col-6 mt-2">
                    <div class="tabtable1" id="table-cont">
                    <!-- ASK -->
                    <table class="table table-sm mb-0" id="table1" cellspacing="0" style="background-color: #fff; font-size: 14px; width: 100%; color: #DFDFDF;">
                      <thead style="background-image: linear-gradient(midnightblue 70%, #2B3441); color: #fff;">
                        <tr>
                          <th>Quantity</th>
                          <th>Price</th>
                          <th>Total<br></th>
                        </tr>
                      </thead>
                      <tbody>
                       <?php
                          for ($i=0; $i <30 ; $i++) {?> 
                          <tr style="background-color: #2B3441">
                            <?php if ($i>1 && $i<4) { ?>
                              <td class="gradasi1" style="background-image: linear-gradient( to left,rgba(255,0,0,0.2) 20%, #2B3441);">35252.525</td>
                              <td style="background-color: rgba(255,0,0,0.2);">0.00003326</td>
                              <td style="background-color: rgba(255,0,0,0.2);">0.00992295</td>
                            <?php }elseif ($i>=4 && $i<7) { ?>
                              <td>35252.525</td>
                              <td class="gradasi2" style="background-image: linear-gradient( to left,rgba(255,0,0,0.2) 40%, #2B3441);">0.00003326</td>
                              <td style="background-color: rgba(255,0,0,0.2);">0.00992295</td>
                           <?php }elseif ($i>=7) { ?>
                              <td>35252.525</td>
                              <td>0.00003326</td>
                              <td class="gradasi3" style="background-image: linear-gradient( to left,rgba(255,0,0,0.2) 20%, #2B3441);">0.00992295</td>
                           <?php }else { ?>
                              <td class="gradasi3" style="background-image: linear-gradient( to left,rgba(255,0,0,0.2) 80%, #2B3441);">35252.525</td>
                              <td style="background-color: rgba(255,0,0,0.2);">0.00003326</td>
                              <td style="background-color: rgba(255,0,0,0.2);">0.00992295</td>
                          <?php } ?>
                          </tr>   
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                    <div class="spread">
                      <div class="fras1 pl-1">
                        FRAS <i class="fas fa-caret-right text-white"></i> PRICE <i class="fas fa-caret-right text-white"></i> BNB
                      </div>
                        <p class="text-center cntr">Spread :  132.17024</p>
                      <div class="fras2 pl-1">
                        FRAS <i class="fas fa-caret-left text-white"></i> PRICE <i class="fas fa-caret-left text-white"></i> BNB
                      </div>
                    </div>
                    <div class="tabtable2" id="tabtable2">
                    <table class="table table-sm" id="table1" cellspacing="0" style="background-color: #fff; font-size: 14px; width: 100%; color: #DFDFDF;">
                        <tbody>
                        <?php
                          for ($i=0; $i <30 ; $i++) {?> 
                          <tr style="background-color: #2B3441">
                            <?php if ($i>1 && $i<4) { ?>
                              <td>0.0760088</td>
                              <td>0.0159793</td>
                              <td class="gradasi5" style="background-image: linear-gradient(to left, rgba(0,128,0,0.3) 60%, #2B3441);">0.00992295</td>
                            <?php } elseif ($i>=4 && $i<7) { ?>
                              <td>0.0760088</td>
                              <td class="gradasi6" style="background-image: linear-gradient(to left, rgba(0,128,0,0.3) 60%, #2B3441);">0.0159793</td>
                              <td style="background-color: rgba(0,128,0,0.3);">0.00992295</td>
                            <?php }elseif ($i>=7) { ?>
                              <td style="background-color: rgba(0,128,0,0.3);">0.0760088</td>
                              <td style="background-color: rgba(0,128,0,0.3);">0.0159793</td>
                              <td style="background-color: rgba(0,128,0,0.3);">0.00992295</td>
                            <?php }else { ?>
                            <td>0.0760088</td>
                            <td>0.0159793</td>
                            <td class="gradasi7" style="background-image: linear-gradient(to left,rgba(0,128,0,0.3) 20%, #2B3441);">0.00992295</td>
                          <?php } ?>
                          </tr>   
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- End col-->
                  </div>
              </div>
              </div>
            </div>
  <div class="tab-pane fade" id="pills-order" role="tabpanel" aria-labelledby="pills-order-tab">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 mt-2 px-0">
          <h4 class="text-center">My Opens Orders</h4>
          <ul class="nav nav-pills nav-fill nav-justified" id="pills-tab2" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-buy-tab" data-toggle="pill" href="#pills-buy" role="tab" aria-controls="pills-buy" aria-selected="true">BUY</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-sell-tab" data-toggle="pill" href="#pills-sell" role="tab" aria-controls="pills-sell" aria-selected="false">SELL</a>
            </li>
            </ul>
            <div class="tab-content" id="pills-tabContent2">
            <div class="tab-pane fade show active mx-2" id="pills-buy" role="tabpanel" aria-labelledby="pills-buy-tab">
           <!-- My Open Orders -->
            <table class="table table-sm" id="oo" width="100%" cellspacing="0" style="background-color: #fff;">
              <thead>
                <tr class="thead1" style="background-image: linear-gradient(#2B3441, blue 80%); font-size: 12px; text-align: center">
                  <th scope="col">PRICE</th>
                  <th scope="col">AMOUNT</th>
                  <th scope="col">TOTAL</th>
                  <th scope="col">DATE</th>
                  <th scope="col">ACTION</th>
                </tr>
              </thead>
               <tbody>
               <?php
                  for ($i=0; $i <20 ; $i++) {?> 
                  <tr style="background-color: #2B3441; font-size: 12px; font-family: serif;">
                    <td class="text-right">0.00003348</td>
                    <td class="text-right">296.38443478</td>
                    <td class="text-right">0.00992295</td>
                    <td><?php echo date("Y-m-d H:i:s"); ?></td>
                    <td><a href="" style="color: orange; font-weight: bold">Cancel</a></td>
                  </tr>   
                <?php
                  }
               ?>
              </tbody>
            </table>
            </div>
            <!-- end tab buy -->
            <div class="tab-pane fade mx-2" id="pills-sell" role="tabpanel" aria-labelledby="pills-sell-tab">
              <table class="table table-sm" id="oo" width="100%" cellspacing="0" style="background-color: #fff;">
              <thead>
                <tr class="thead1" style="background-image: linear-gradient(#2B3441, blue 80%); font-size: 12px; text-align: center">
                  <th scope="col">PRICE</th>
                  <th scope="col">AMOUNT</th>
                  <th scope="col">TOTAL</th>
                  <th scope="col">DATE</th>
                  <th scope="col">ACTION</th>
                </tr>
              </thead>
               <tbody>
               <?php
                  for ($i=0; $i <20 ; $i++) {?> 
                  <tr style="background-color: #2B3441; font-size: 12px; font-family: serif;">
                    <td class="text-right">0.00003348</td>
                    <td class="text-right">296.38443478</td>
                    <td class="text-right">0.00992295</td>
                    <td><?php echo date("Y-m-d H:i:s"); ?></td>
                    <td><a href="" style="color: orange; font-weight: bold">Cancel</a></td>
                  </tr>   
                <?php
                  }
               ?>
              </tbody>
            </table>
            </div>
            </div>

            <h4 class="text-center mt-2">LAST TRANSACTIONS</h4>
            <div class="tabtable4">
            <!-- Market History -->
            <table class="table table-sm" width="100%" cellspacing="0">
              <thead>
                <tr class="thead1" style="background-image: linear-gradient(orange, #2B3441); font-size: 12px; text-align: center;">
                  <th>DATE</th>
                  <th>HOUR</th>
                  <th>PRICE</th>
                  <th>FILLED</th>
                  <th>COST/<br>PROCEEDS</th>
                </tr>
              </thead>
               <tbody>
                <?php
                  $r= 2;
                  $g=0;
                  for ($i=0; $i <20 ; $i++) {?> 
                  <tr style="background-color: #2B3441; font-size: 12px; font-family: serif;">
                    <td><?php echo date("d/m/Y"); ?></td>
                    <td><?php  echo date("H:i:s");?></td>
                    <?php if ($i<$r) {
                      echo "<th style='color: red;'>0.00003348</th>";
                    }else{
                      $g= $g+1;
                      echo "<th style='color: green;'>0.00003348</th>"; 
                    }
                    if ($g === $r) {
                        $r = $r+4;
                      }?>
                    <td>296.38443478</td>
                    <td>0.00992295</td>
                  </tr>  
                   <?php
                  }
               ?> 
              </tbody>
            </table>
        </div>
        </div>
      </div>
    </div>
  </div>
  <div class="tab-pane fade" id="pills-chat" role="tabpanel" aria-labelledby="pills-chat-tab">
    <div style="float: left; width: 100%;">
                <!-- DIRECT CHAT -->
              <div class="box box-danger" id="boxchat"  style="height: 100%; margin-bottom: 0px; background-color: dimgrey">
                <!-- /.box-header -->
                <div class="box-body" style="height: 500px;">
                </div>
                <!-- /.box-body -->
                <div class="box-footer" id="boxfooter" style="background-color: black">
                  <form action="#" method="post">
                    <div class="input-group">
                      <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                      <span style="font-size: 23px; border-top: 2px solid #eaeaea; border-bottom: 2px solid #eaeaea; background-color: white">
                      <i class="fas fa-smile-beam" style="color: grey; background-color: inherit;"></i>
                      </span>
                      <span class="input-group-btn">
                            <button type="button" class="btn btn-danger btn-flat">Send</button>
                          </span>
                    </div>
                  </form>
                </div>
          </div>
              </div>
              <!--/.direct-chat -->
              <div class="iklan">
              <a href="" style="display: inline;">
              <img src="https://www.mystellar.org/GALLERYALBUM/Stellar/Banner%206%20-%20RESERVED.png" width="49%" height="75">
            </a>
            <a href="" style="display: inline;">
              <img src="https://www.mystellar.org/GALLERYALBUM/Stellar/Banner%206%20-%20RESERVED.png" width="50%" height="75">
            </a>
            </div> 
                </div>
  </div>
<!-- end content -->
       





  <!-- Modal -->
  <!-- modal-lr -->
    <div class="modal fade" id="modal-lr" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="color: initial;">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <ul class="nav nav-tabs clearfix" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
              </li>
              <li class="ml-auto">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                  </button>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                <div class="jumbotron jumbotron-fluid">
                      <div class="container">
                        <h1 class="display-4">Hello, Friend</h1>
                      </div>
                    </div>
                <form action="../../index.html" method="post">
                      <div class="form-group has-feedback">
                        <label>Email address</label>
                        <input type="text" class="form-control" placeholder="Your email address">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                      </div>
                      <div class="form-group has-feedback">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox">Remember me 
                            </label>
                            <label style="float: right;">
                              <a href="#" class="text-right"> Forgot password ?</a>
                            </label>
                          </div>
                        </div>
                        <!-- /.col -->

                        <div class="col-12">
                          <button type="submit" class="btn btn-default btn-block">Login</button>
                          <span class="text-center">Not yet an account?<a href="register.html" class="text-center"> Register</a></span>
                        </div>
                        <!-- /.col -->
                        
                      </div>
                    </form>
              </div>
              <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                <div class="jumbotron jumbotron-fluid">
                  <div class="container">
                    <h2 class="display-4">Join with <b>We</b> are</h2>
                  </div>
                </div>
                <form action="../../index.html" method="post">
                      <div class="form-group has-feedback">
                        <label>Email address</label>
                        <input type="text" class="form-control" placeholder="Your email address">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                      </div>
                      <div class="form-group has-feedback">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                      </div>
                      <div class="form-group has-feedback">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" placeholder="Retype password">
                        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <div class="checkbox icheck text-center">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">Mystellar.org</a> Terms of Service
                            </label>
                          </div>
                              <p style="font-size: 12px; text-align: justify; margin-top: 8px; margin-bottom: 35px;">
                                We are committed to complying with all U.S. regulations that help prevent, detect and remediate unlawful behavior by customers and virtual currency developers when using the Bittrex trading platform or any of the company’s other services. 

                                Bittrex is not a regulated exchange under U.S. securities laws. More information can be found here . 
                              </p>
                        </div>
                        <!-- /.col -->

                        <div class="col-12">
                          <button type="submit" class="btn btn-default btn-block" style="padding: 8px; font-size: 17px;">Register</button>
                          <span class="text-center">Already have an account?<a href="login.php" class="text-center"> Login</a></span>
                        </div>
                        <!-- /.col -->
                      </div>
                    </form>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end modal-lr -->

    <!-- modal typecoin2 -->
            <div class="modal fade" id="typecoin2" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-body bg-dark" id="bodymodal">
                    <button class="btn btn-secondary btn-lg btn-block" data-toggle="modal" data-target="#typecoin3" >Blockchain</button>
                    <button class="btn btn-danger btn-lg btn-block" id="btntoken">Token</button>
                    <button class="btn btn-primary btn-lg btn-block">FIAT</button>
                    <label class="p-2" style="font-size: 17px;">
                      <input type="checkbox" id="fav">
                       <span style="color: white;">Show Favourites</span>
                      <i class="fa fa-star text-yellow"></i>
                    </label>
                    <ul class="list-group list-group-flush text-white" id="ulnor">
                      <li class="list-group-item bg-dark">BTC 
                        <button class="bg-transparent border-0 float-right btnfav">
                          <i class="fa fa-star text-secondary"></i>
                        </button>
                        <button class="bg-transparent border-0 float-right btnfavv" style="display: none;">
                          <i class="fa fa-star text-warning"></i>
                        </button>
                      </li>
                      <li class="list-group-item bg-dark">BNB 
                        <button class="bg-transparent border-0 float-right btnfav1">
                          <i class="fa fa-star text-secondary"></i>
                        </button>
                        <button class="bg-transparent border-0 float-right btnfavv1" style="display: none;">
                          <i class="fa fa-star text-warning"></i>
                        </button>
                      </li>
                      <li class="list-group-item bg-dark">ETH 
                        <button class="bg-transparent border-0 float-right btnfav2">
                          <i class="fa fa-star text-secondary"></i>
                        </button>
                        <button class="bg-transparent border-0 float-right btnfavv2" style="display: none;">
                          <i class="fa fa-star text-warning"></i>
                        </button>
                      </li>
                      <li class="list-group-item bg-dark">ETC 
                        <button class="bg-transparent border-0 float-right btnfav3">
                          <i class="fa fa-star text-secondary"></i>
                        </button>
                        <button class="bg-transparent border-0 float-right btnfavv3" style="display: none;">
                          <i class="fa fa-star text-warning"></i>
                        </button>
                      </li>
                      <li class="list-group-item bg-dark">NULS 
                        <button class="bg-transparent border-0 float-right btnfav4">
                          <i class="fa fa-star text-secondary"></i>
                        </button>
                        <button class="bg-transparent border-0 float-right btnfavv4" style="display: none;">
                          <i class="fa fa-star text-warning"></i>
                        </button>
                      </li>
                    </ul>
                    <ul class="list-group list-group-flush text-white" id="ulfav" style="display: none;">
                    </ul>
                      </div>
                  </div>
                </div>
              </div>
        <!-- end modal typecoin2 -->


        
            <!-- <div class="modal fade" id="typecoin3" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-body bg-dark" id="bodymodal">
                    <button class="btn btn-secondary btn-lg btn-block" data-dismiss= "modal">Blockchain1</button>
                    <button class="btn btn-secondary btn-lg btn-block" data-dismiss= "modal">Blockchain2</button>
                    <button class="btn btn-secondary btn-lg btn-block" data-dismiss= "modal">Blockchain3</button>
                    <button class="btn btn-secondary btn-lg btn-block" data-dismiss= "modal">Blockchain4</button>
                    <button class="btn btn-secondary btn-lg btn-block" data-dismiss= "modal">Blockchain5</button>
                    <button class="btn btn-secondary btn-lg btn-block" data-dismiss= "modal">Blockchain6</button>
                  </div>
                </div>
              </div> -->
        
        <!-- modal typecoin3 -->
        <div class="modal fade" id="typecoin3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-body bg-dark" id="bodymodal">
                <form>
                  <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Search</label>
                    <div class="col-sm-10">
                      <input type="search" class="form-control" id="colFormLabel placeholder="">
                    </div>
                  </div>
                </form>
                 
                <?php for ($i=1; $i <16 ; $i++) { ?> 
                  <button class="btn btn-secondary btn-lg btn-block" data-dismiss= "modal">Blockchain <?= $i ?></button>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <!-- end modal typecoin3 -->



 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/js/swiper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/stellar2.js"></script>
    <!-- Resources -->
    <!-- Resources -->
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/dark.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>



  </body>
</html>