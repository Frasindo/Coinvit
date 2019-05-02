//Handle starring for glyphicon and font awesome
$("span").click(function (e) {
  e.preventDefault();
  //detect type
  var $this = $(this).find("i");
  var fa = $this.hasClass("fa");

  //Switch states
   if (fa) {
    $this.toggleClass("fa-star");
    $this.toggleClass("fa-star-o");
  }

});


$("li.cc").click(function (){
  var idx = $(this).index();
  $("li.cc").eq(idx).attr("id", "favo");
});


$("#fav").change(function(){
  if (this.checked) {
    $("li#favo").show();
    $("li#cc").hide();
  }else{
    $("li#favo").show();
    $("li#cc").show();
  }

});