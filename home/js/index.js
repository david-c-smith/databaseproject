$('.app-row').mouseover(function() {
  $el = $(this);
  
  $el.siblings().removeClass('focus').addClass('blur');
  $el.addClass('focus');
});

$('.app-body').mouseleave(function() {
  $el = $(this);
  
  $el.children().removeClass('blur focus');
});