$(".chat-btn").click(function(){
           
            if ($(".chat-btn").hasClass("hide-chat")) {  
               $(".chat-btn").removeClass("hide-chat");
  

               $("#left-layout").hide();
            
               $(".message").removeClass("font-10");
               $(".message").addClass("font-14");

               $(".notice").removeClass("font-10");
               $(".notice").addClass("font-14");

               $(".show-tablet-ads").css("display", "block");
               $(".show-desktop-ads").hide();

               $('.col-lg-1').css('width', '95%');
               $('.col-lg-1').css('padding-left', '15px');
               $('.col-lg-11').css('width', '0%');

               $("#icon-setup").click(function(){
                  if($("body").hasClass("sidebar-collapse")) {
                     $('#right-layout').css('width', '95%');
                  }else if(!$("body").hasClass("sidebar-collapse")) { 
                     $('#right-layout').css('width', '95%'); 
                  } 
               });

            }else if (!$(".chat-btn").hasClass("hide-chat")){
               $(".chat-btn").addClass("hide-chat");

               $("#left-layout").show();

               $('.col-lg-11').css('width', '95%');
               $('.col-lg-1').css('padding-left', '15px');
               $('.col-lg-1').css('width', '0%');

               $("#icon-setup").click(function(){
                  if($("body").hasClass("sidebar-collapse")) {
                     $('#right-layout').css('width', '2%');
                  }else if(!$("body").hasClass("sidebar-collapse")) { 
                     $('#right-layout').css('width', '2%'); 
                  } 
               });
            }

          });