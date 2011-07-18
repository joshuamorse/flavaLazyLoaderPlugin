$('.lazy-load').each(function() {
  $(this).load($(this).attr('rel'));
});
