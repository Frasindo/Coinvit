
  $(".sidebar-toggle").click(function(){
        if($("body").hasClass("sidebar-collapse")) { 
         
         if ($(window).innerWidth() <= 1024){
            $('.left-layout').css("width", "775px");
            $('.right-layout').css("width", "200px");
            
            $('#column-2-left-header').css("width", "600px");
            
            $('#column-2-right-header').css("width", "210px"); 
            $('#column-2-right-header').css( "margin-top", "-130px"); 
            
            $('#column-4-sm-header').css("width", "130px");
            
            $('.column-3-left-bsl').css("width", "250px");
            $('.column-3-left-bsl').css("margin-left", "0px");
            $('.column-3-left-bsl').css("margin-right", "0px");

            $('.column-3-middle-bsl').css("width", "245px");
            $('.column-3-middle-bsl').css("margin-left", "5px");
            $('.column-3-middle-bsl').css("margin-right", "5px");

            $('.column-3-right-bsl').css("width", "250px");
            $('.column-3-right-bsl').css("margin-left", "0px");
            $('.column-3-right-bsl').css("margin-right", "0px");
             
            $('.column-2-left-buy').css("width", "370px");
            $('.column-2-right-sell').css("width", "370px");


          }

          else if ($(window).innerWidth() <= 1285){
            $('.left-layout').css("width", "1030px");
            $('.right-layout').css("width", "200px");
            
            $('.change-s').css("font-size", "18px");
            
            $('.img-logo-asset').css("width", "50px");
            $('.img-logo-asset').css("height", "50px");

            $('.column-3-left-bsl').css("width", "326px");
            $('.column-3-left-bsl').css("margin-left", "0px");
            $('.column-3-left-bsl').css("margin-right", "0px");

            $('.column-3-middle-bsl').css("width", "328px");
            $('.column-3-middle-bsl').css("margin-left", "15px");
            $('.column-3-middle-bsl').css("margin-right", "15px");

            $('.column-3-right-bsl').css("width", "326px");
            $('.column-3-right-bsl').css("margin-left", "0px");
            $('.column-3-right-bsl').css("margin-right", "0px");
             
            $('.column-2-left-buy').css("width", "495px");
            $('.column-2-right-sell').css("width", "495px");

            $('.column-6-header').css("width", "150px");

          }

          else if ($(window).innerWidth() <= 1370){
            $('.left-layout').css("width", "1120px");
            $('.right-layout').css("width", "200px");

            $('.column-3-left-bsl').css("width", "316px");
            $('.column-3-left-bsl').css("margin-left", "22px");
            $('.column-3-left-bsl').css("margin-right", "22px");

            $('.column-3-middle-bsl').css("width", "318px");
            $('.column-3-middle-bsl').css("margin-left", "22px");
            $('.column-3-middle-bsl').css("margin-right", "22px");

            $('.column-3-right-bsl').css("width", "316px");
            $('.column-3-right-bsl').css("margin-left", "22px");
            $('.column-3-right-bsl').css("margin-right", "22px");
             
            $('.column-2-left-buy').css("width", "540px");
            $('.column-2-right-sell').css("width", "540px");

            $('.column-6-header').css("width", "170px");

          }

          else if ($(window).innerWidth() <= 1600){
            $('.left-layout').css("width", "1345px");
            $('.right-layout').css("width", "300px");

            $('.column-3-left-bsl').css("width", "396px");
            $('.column-3-left-bsl').css("margin-left", "22px");
            $('.column-3-left-bsl').css("margin-right", "22px");

            $('.column-3-middle-bsl').css("width", "380px");
            $('.column-3-middle-bsl').css("margin-left", "22px");
            $('.column-3-middle-bsl').css("margin-right", "22px");

            $('.column-3-right-bsl').css("width", "380px");
            $('.column-3-right-bsl').css("margin-left", "22px");
            $('.column-3-right-bsl').css("margin-right", "22px");
             
            $('.column-2-left-buy').css("width", "650px");
            $('.column-2-right-sell').css("width", "650px");

            $('.column-6-header').css("width", "208px");

          }


          $('#asset').slimScroll({
            height: '56vh'
         });

        }else if(!$("body").hasClass("sidebar-collapse")) { 

          
          if ($(window).innerWidth() <= 1024){
            $('.left-layout').css("width", "638px");
            $('.right-layout').css("width", "300px");
            
            $('#column-2-left-header').css("width", "600px");
            
            $('#column-2-right-header').css("width", "180px"); 
            $('#column-2-right-header').css("margin-top", "-130px"); 
            
            $('#column-4-sm-header').css("width", "100px");
            
            $('.column-3-left-bsl').css("width", "203px");
            $('.column-3-left-bsl').css("margin-left", "0px");
            $('.column-3-left-bsl').css("margin-right", "0px");

            $('.column-3-middle-bsl').css("width", "200px");
            $('.column-3-middle-bsl').css("margin-left", "5px");
            $('.column-3-middle-bsl').css("margin-right", "5px");

            $('.column-3-right-bsl').css("width", "203px");
            $('.column-3-right-bsl').css("margin-left", "0px");
            $('.column-3-right-bsl').css("margin-right", "0px");
             
            $('.column-2-left-buy').css("width", "620px");
            $('.column-2-right-sell').css("width", "620px");

          }
          
          else if ($(window).innerWidth() <= 1285){
           $('.left-layout').css("width", "890px");
           $('.right-layout').css("width", "300px");
           
           $('.img-logo-asset').css("width", "45px");
           $('.img-logo-asset').css("height", "45px");
           
           $('.change-s').css("font-size", "16px");

           $('.column-3-left-bsl').css("width", "278px");
           $('.column-3-left-bsl').css("margin-left", "0px");
           $('.column-3-left-bsl').css("margin-right", "0px");

           $('.column-3-middle-bsl').css("width", "278px");
           $('.column-3-middle-bsl').css("margin-left", "15px");
           $('.column-3-middle-bsl').css("margin-right", "15px");

           $('.column-3-right-bsl').css("width", "278px");
           $('.column-3-right-bsl').css("margin-left", "0px");
           $('.column-3-right-bsl').css("margin-right", "0px");
           
           $('.column-2-left-buy').css("width", "425px");
           $('.column-2-right-sell').css("width", "425px");

           $('.column-6-header').css("width", "125px");
          }

          else if ($(window).innerWidth() <= 1370){
           $('.left-layout').css("width", "978px");
           $('.right-layout').css("width", "300px");

           $('.column-3-left-bsl').css("width", "306px");
           $('.column-3-left-bsl').css("margin-left", "0px");
           $('.column-3-left-bsl').css("margin-right", "0px");

           $('.column-3-middle-bsl').css("width", "308px");
           $('.column-3-middle-bsl').css("margin-left", "15px");
           $('.column-3-middle-bsl').css("margin-right", "15px");

           $('.column-3-right-bsl').css("width", "306px");
           $('.column-3-right-bsl').css("margin-left", "0px");
           $('.column-3-right-bsl').css("margin-right", "0px");
           
           $('.column-2-left-buy').css("width", "465px");
           $('.column-2-right-sell').css("width", "465px");

           $('.column-6-header').css("width", "140px");
          }

          else if ($(window).innerWidth() <= 1600){
           $('.left-layout').css("width", "1200px");
           $('.right-layout').css("width", "300px");

           $('.column-3-left-bsl').css("width", "380px");
           $('.column-3-left-bsl').css("margin-left", "0px");
           $('.column-3-left-bsl').css("margin-right", "0px");

           $('.column-3-middle-bsl').css("width", "380px");
           $('.column-3-middle-bsl').css("margin-left", "10px");
           $('.column-3-middle-bsl').css("margin-right", "10px");

           $('.column-3-right-bsl').css("width", "380px");
           $('.column-3-right-bsl').css("margin-left", "0px");
           $('.column-3-right-bsl').css("margin-right", "0px");
           
           $('.column-2-left-buy').css("width", "580px");
           $('.column-2-right-sell').css("width", "580px");

           $('.column-6-header').css("width", "180px");
          }

         

         $('#asset').slimScroll({
            height: '70vh'
         });
        }
      });