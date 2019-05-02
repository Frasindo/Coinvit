setTimeout(function(){ 
  $("body").addClass("sidebar-collapse");//ganti attribute dokumentasi jquery
    $("#icon-setup").attr("src","dist/img/button/btn-show.png");
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
         $("#icon-setup").attr("src","dist/img/button/btn-hide.png");

         $("#btn-token").css('width', '25%');
         $("#btn-fiat").css('width', '25%');
         $("#btn-fiat").css('margin-top', '0');
    }
    else{
         $("#icon-setup").addClass('hide-btn');
         $("#icon-setup").removeClass('show-btn');
         $("#icon-setup").attr("src","dist/img/button/btn-show.png");

         $("#btn-token").css('width', '95%');
         $("#btn-fiat").css('width', '95%');
         $("#btn-fiat").css('margin-top', '5px');
    }
});