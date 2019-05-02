// Redirect to mobile version
var url = window.location.pathname;
var base_url = window.location.origin;
var tes = window.location.href; 
var filename = url.substring(url.lastIndexOf('/')+1);

 if (screen.width <= 699 && filename == 'market.html') {
    document.location = "m-market.php";
}else if (screen.width <= 699 && filename == 'trade.html') {
    document.location = "m-trade.php";
}