$(window).scroll(function(){
  if($(document).scrollTop() > 200) {
      $('header').addClass('small');
  } else {
      $('header').removeClass('small');
  }
});