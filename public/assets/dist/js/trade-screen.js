     $("#icon-setup").click(function(){
           if($("body").hasClass("sidebar-collapse")) { 

               $('.hide-mini').css('display', 'inline');
               $('.hide-max').css('display', 'none');
               $('.back-margin-left').css('margin-left', '25px');
               $('#s-h').text('SHOW');

               $('.logo-icon').css('width', '25px');
               $('.logo-icon').css('height', '25px');
               
                if ($(window).innerWidth() <= 996){

                   $('body').css('width', '100%');
  
                   $('header-asset-panel').addClass('col-sm-12');
                   $('header-asset-panel').removeClass('col-sm-2');

                   $('.col-lg-11').css('width', '95%');
                   $('.col-lg-1').css('width', '2%');

                 }
                else if ($(window).innerWidth() <= 1024){
                   $('body').css('width', '100%');

                   $('#left-layout').addClass('col-md-11');
                   $('#left-layout').removeClass('col-md-9');
                   
                   $('.col-md-11').css('width', '95.6%');
                   $('.col-md-1').css('width', '2%');

                 }
                 else if ($(window).innerWidth() <= 1360) {
                   $('body').css('width', '100%');
                
                   $('#left-layout').addClass('col-lg-11');
                   $('#left-layout').removeClass('col-lg-9');

                   $('#left-layout').removeClass('col-md-9');
                   $('#left-layout').addClass('col-md-11');
    
                   $('.col-lg-11').css('width', '97%');
                   $('.col-lg-2').css('width', '16.66666667%');
                   $('.col-lg-1').css('width', '2%');

                 }
                 else if ($(window).innerWidth() <= 1900) {
                   $('body').css('width', '100%');
                   
                   $('#left-layout').addClass('col-lg-11');
                   $('#left-layout').removeClass('col-lg-9');

                   $('#left-layout').removeClass('col-md-9');
                   $('#left-layout').addClass('col-md-11');
    
                   $('.col-lg-11').css('width', '97%');
                   $('.col-lg-2').css('width', '16.66666667%');
                   $('.col-lg-1').css('width', '2%');

                 }

                 $('#asset').slimScroll({
                    height: 'calc(100vh - 280px)'
                  });

           }else if(!$("body").hasClass("sidebar-collapse")) { 

            $('.hide-mini').css('display', 'none');
            $('.hide-max').css('display', 'block');
            $('.back-margin-left').css('margin-left', '0px');
            $('#s-h').text('HIDE');

            $('.logo-icon').css('width', '16px');
            $('.logo-icon').css('height', '16px');
             
             if ($(window).innerWidth() <= 996){
               $('.hide-max').css('display', 'none');
               $('.col-lg-11').css('width', '95%');
               $('.col-lg-1').css('width', '0%');    

             }

             else if ($(window).innerWidth() <= 1024){
              $('.col-lg-11').css('width', '78%');
              $('.col-lg-1').css('width', '19%');  

             }
             else if ($(window).innerWidth() <= 1360){
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
           }
     });