$(document).ready(function()
    {
      $('#slider1').tinycarousel({
        interval: true,
        axis: 'y',
        animationTime: 500
      });
      $('#slider2').tinycarousel({
        interval: true,
        axis: 'y',
        animationTime: 500
      });
      $('#slider3').tinycarousel({
        interval: true,
        axis: 'y',
        animationTime: 500
      });
      $('#slider4').tinycarousel({
        interval: true,
        axis: 'y',
        animationTime: 500
      });
      // var slider7 = $("#slider1").data("plugin_carousel");
      // var slider8 = $("#slider2").data("plugin_carousel");
      // var slider9 = $("#slider3").data("plugin_carousel");
      // var slider10 = $("#slider4").data("plugin_carousel");

  //     $('.carousel').carousel({
		//   interval: 1000
		// });

    $(".changetheme").click(function(){
    // $("body").css({"background-color": "#EFEFEF",
    //                 "color": "initial"});
    $(".navbar").removeClass("navbar-light").removeClass("bg-light").addClass("navbar-dark").addClass("bg-dark");
    $("#themechange").attr("href", "css/index3.css");
    $(this).toggle();
    $(".changetheme1").toggle();
    // $(this).addClass("changetheme1").removeClass("changetheme");
  });

  $(".changetheme1").click(function(){
    $(".navbar").removeClass("navbar-dark").removeClass("bg-dark").addClass("navbar-light").addClass("bg-light");
    $("#themechange").attr("href", "css/index.css");
    $(this).toggle();
    $(".changetheme").toggle();
  });
    });