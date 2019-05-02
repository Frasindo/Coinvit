 $(document).ready(function () {
   $("#login_form").hide();
   
   $("#login_btn").click(function(){
     $("#register_form").hide();
     $("#login_form").show();
   });

   $("#register_btn").click(function(){
     $("#register_form").show();
     $("#login_form").hide();
   });


   $("#login_btn_register_form").click(function(){
     $("#register_form").hide();
     $("#login_form").show();
   });

   $("#register_btn_register_form").click(function(){
     $("#register_form").show();
     $("#login_form").hide();
   });

});