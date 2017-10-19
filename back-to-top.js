// Back to top function

$(window).scroll(function() {
  if($(window).scrollTop() > 200) {
    $("#back-to-top").fadeIn();
  }
  else {
    $("#back-to-top").fadeOut();
  }
});

$("#back-to-top").click(function(event) {
  $("html,body").animate({scrollTop: 0}, 500);
});