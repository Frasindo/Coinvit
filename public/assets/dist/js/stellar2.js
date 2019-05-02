$(document).ready(function() {
    $("#chartdiv").css("display", "none");

	$(".btn2").click(function() {
	$(this).addClass("btn21").removeClass("btn2");
	$(".btn1").addClass("btn12").removeClass("btn1");
	$(".buttonbuysell").text("SELL");
	$(".buttonbuysell").addClass("btn-danger").removeClass("btn-success");
	});

	$(".btn1").click(function() {
	$(this).addClass("btn1").removeClass("btn12");
	$(".btn21").addClass("btn2").removeClass("btn21");
	$(".buttonbuysell").text("BUY");
	$(".buttonbuysell").removeClass("btn-danger").addClass("btn-success");
	});

	$("#max").click(function(){
		$("#quantity").val("100");

	});

	$("#max2").click(function(){
		$("#price").val("100");
	});

	$("#max3").click(function(){
		$("#total").val("100");
	});


	$(".depthwidget").click(function(){
		$(".tradingview-widget-container").toggle(450);
		$("#chartdiv").toggle(450);
		$(".candlewidget").toggle();

	});

	$(".candlewidget").click(function(){
		$(".tradingview-widget-container").toggle(450);
		$("#chartdiv").toggle(450);
		$(".candlewidget").toggle();
	});

  var tableCont = document.querySelector('#table-cont')
  /**
   * scroll handle
   * @param {event} e -- scroll event
   */
  function scrollHandle (e){
    var scrollTop = this.scrollTop;
    this.querySelector('thead').style.transform = 'translateY(' + scrollTop + 'px)';
  }
  
  tableCont.addEventListener('scroll',scrollHandle);
  // $(".tabtable2").scrollTop(100);
  $("#tabtable2").animate({ scrollTop: $(document).height() }, 1000);
  // return false;


  $(".changetheme").click(function(){
    // $("body").css({"background-color": "#EFEFEF",
    //                 "color": "initial"});
    $(".navbar").removeClass("navbar-dark").addClass("navbar-light");
    new TradingView.widget(
              {
              "width": "auto",
              "height": 300,
              "symbol": "COINBASE:BTCUSD",
              "interval": "D",
              "timezone": "Etc/UTC",
              "theme": "Light",
              "style": "1",
              "locale": "en",
              "toolbar_bg": "rgba(255, 255, 255, 1)",
              "enable_publishing": false,
              "hide_legend": true,
              "save_image": false,
              "container_id": "tradingview_ed7fb"
            }
              );

    $("#themechange").attr("href", "css/stellar3.css");
    $(this).toggle();
    $(".changetheme1").toggle();
    // $(this).addClass("changetheme1").removeClass("changetheme");
  });

  $(".changetheme1").click(function(){
    $(".navbar").removeClass("navbar-light").addClass("navbar-dark");
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

    $("#themechange").attr("href", "css/stellar2.css");
    $(this).toggle();
    $(".changetheme").toggle();
  });

  $("#fav").click(function(){
  	$("#ulfav").toggle();
  	$("#ulnor").toggle();
  })

  // $(".btnfav").one("click", function(){
  // 	$("#ulfav").append("<li class='list-group-item bg-dark'>" + $(this).parent().text() + "</li>");
  // 	$(this).children().removeClass("text-secondary").addClass("text-warning");
  // })

  $(".btnfav").click(function(){
  	$("#ulfav").append("<li class='list-group-item bg-dark'>" + $(this).parent().text() + "</li>");
  	$(this).toggle();
  	$(".btnfavv").toggle();
  })

  $(".btnfavv").click(function(){
  	$("#ulfav").children(":contains(" + $(this).parent().text() + ")").remove();
  	$(this).toggle();
  	$(".btnfav").toggle();
  })


  $(".btnfav1").click(function(){
  	$("#ulfav").append("<li class='list-group-item bg-dark'>" + $(this).parent().text() + "</li>");
  	$(this).toggle();
  	$(".btnfavv1").toggle();
  })

  $(".btnfavv1").click(function(){
  	$("#ulfav").children(":contains(" + $(this).parent().text() + ")").remove();
  	$(this).toggle();
  	$(".btnfav1").toggle();
  })

  $(".btnfav2").click(function(){
  	$("#ulfav").append("<li class='list-group-item bg-dark'>" + $(this).parent().text() + "</li>");
  	$(this).toggle();
  	$(".btnfavv2").toggle();
  })

  $(".btnfavv2").click(function(){
  	$("#ulfav").children(":contains(" + $(this).parent().text() + ")").remove();
  	$(this).toggle();
  	$(".btnfav2").toggle();
  })

  $(".btnfav3").click(function(){
  	$("#ulfav").append("<li class='list-group-item bg-dark'>" + $(this).parent().text() + "</li>");
  	$(this).toggle();
  	$(".btnfavv3").toggle();
  })

  $(".btnfavv3").click(function(){
  	$("#ulfav").children(":contains(" + $(this).parent().text() + ")").remove();
  	$(this).toggle();
  	$(".btnfav3").toggle();
  })

  $(".btnfav4").click(function(){
  	$("#ulfav").append("<li class='list-group-item bg-dark'>" + $(this).parent().text() + "</li>");
  	$(this).toggle();
  	$(".btnfavv4").toggle();
  })

  $(".btnfavv4").click(function(){
  	$("#ulfav").children(":contains(" + $(this).parent().text() + ")").remove();
  	$(this).toggle();
  	$(".btnfav4").toggle();
  })

  $("#btnbc").css("color", "blue");


// Themes begin
am4core.useTheme(am4themes_dark);
// Themes end
var chart = am4core.create("chartdiv", am4charts.XYChart);

// Add data
chart.dataSource.url = "https://poloniex.com/public?command=returnOrderBook&currencyPair=BTC_ETH&depth=50";
chart.dataSource.reloadFrequency = 30000;
chart.dataSource.adapter.add("parsedData", function(data) {
  
  // Function to process (sort and calculate cummulative volume)
  function processData(list, type, desc) {

    // Convert to data points
    for(var i = 0; i < list.length; i++) {
      list[i] = {
        value: Number(list[i][0]),
        volume: Number(list[i][1]),
      }
    }

    // Sort list just in case
    list.sort(function(a, b) {
      if (a.value > b.value) {
        return 1;
      }
      else if (a.value < b.value) {
        return -1;
      }
      else {
        return 0;
      }
    });

    // Calculate cummulative volume
    if (desc) {
      for(var i = list.length - 1; i >= 0; i--) {
        if (i < (list.length - 1)) {
          list[i].totalvolume = list[i+1].totalvolume + list[i].volume;
        }
        else {
          list[i].totalvolume = list[i].volume;
        }
        var dp = {};
        dp["value"] = list[i].value;
        dp[type + "volume"] = list[i].volume;
        dp[type + "totalvolume"] = list[i].totalvolume;
        res.unshift(dp);
      }
    }
    else {
      for(var i = 0; i < list.length; i++) {
        if (i > 0) {
          list[i].totalvolume = list[i-1].totalvolume + list[i].volume;
        }
        else {
          list[i].totalvolume = list[i].volume;
        }
        var dp = {};
        dp["value"] = list[i].value;
        dp[type + "volume"] = list[i].volume;
        dp[type + "totalvolume"] = list[i].totalvolume;
        res.push(dp);
      }
    }

  }

  // Init
  var res = [];
  processData(data.bids, "bids", true);
  processData(data.asks, "asks", false);

  return res;
});

// Set up precision for numbers
chart.numberFormatter.numberFormat = "#,###.####";

// Create axes
var xAxis = chart.xAxes.push(new am4charts.CategoryAxis());
xAxis.dataFields.category = "value";
//xAxis.renderer.grid.template.location = 0;
xAxis.renderer.minGridDistance = 50;
xAxis.title.text = "Price (BTC/ETH)";

var yAxis = chart.yAxes.push(new am4charts.ValueAxis());
yAxis.title.text = "Volume";

// Create series
var series = chart.series.push(new am4charts.StepLineSeries());
series.dataFields.categoryX = "value";
series.dataFields.valueY = "bidstotalvolume";
series.strokeWidth = 2;
series.stroke = am4core.color("#0f0");
series.fill = series.stroke;
series.fillOpacity = 0.1;
series.tooltipText = "Ask: [bold]{categoryX}[/]\nTotal volume: [bold]{valueY}[/]\nVolume: [bold]{bidsvolume}[/]"

var series2 = chart.series.push(new am4charts.StepLineSeries());
series2.dataFields.categoryX = "value";
series2.dataFields.valueY = "askstotalvolume";
series2.strokeWidth = 2;
series2.stroke = am4core.color("#f00");
series2.fill = series2.stroke;
series2.fillOpacity = 0.1;
series2.tooltipText = "Ask: [bold]{categoryX}[/]\nTotal volume: [bold]{valueY}[/]\nVolume: [bold]{asksvolume}[/]"

var series3 = chart.series.push(new am4charts.ColumnSeries());
series3.dataFields.categoryX = "value";
series3.dataFields.valueY = "bidsvolume";
series3.strokeWidth = 0;
series3.fill = am4core.color("#000");
series3.fillOpacity = 0.2;

var series4 = chart.series.push(new am4charts.ColumnSeries());
series4.dataFields.categoryX = "value";
series4.dataFields.valueY = "asksvolume";
series4.strokeWidth = 0;
series4.fill = am4core.color("#000");
series4.fillOpacity = 0.2;

// Add cursor
chart.cursor = new am4charts.XYCursor();


});