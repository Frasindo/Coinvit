// Scroll in Sidebar Asset
$(function(){
 var hi = $( ".height-info" ).outerHeight();
 var hih = $( ".height-info-header" ).outerHeight();
 $('#info-asset').slimScroll({
  color: '#d2d6de',
  railOpacity: 0.3,
  width: '100%',
  wheelStep : 100,
  height: (hi - hih - 2+'px')
});
  

$('#coin-slider').slimscroll({
  color: '#d2d6de',
  railOpacity: 0.3,
  height: '35px',
  width: '90%',
  axis: 'x'
});
// Asset scroll setup
$('#asset').slimScroll({
  color: '#d2d6de',
  railOpacity: 0.3,
  width: '100%',
  wheelStep : 100,
  height: 'calc(100vh - 325px)'
});

$('#p_key').slimScroll({
  color: '#d2d6de',
  railOpacity: 0.3,
  width: '100%',
  height: 'calc(80vh - 100px)'
});

$('#notice-scroll').slimScroll({
  color: '#d2d6de',
  railOpacity: 0.3,
  width: '100%',
  wheelStep : 200,
  height: 'calc(100vh - 525px)'
});

$('#scroll-chat').slimscroll({
  railOpacity: 0.3,
  wheelStep : 200,
  width: '100%',
  height: 'calc(100vh - 125px)'
});

$('#linked-wallet').slimscroll({
  railOpacity: 0.3,
  wheelStep : 200,
  width: '100%',
  height: 'calc(100vh - 400px)'
});
$('#unlinked-wallet').slimscroll({
  railOpacity: 0.3,
  wheelStep : 200,
  width: '100%',
  height: 'calc(100vh - 400px)'
});
});