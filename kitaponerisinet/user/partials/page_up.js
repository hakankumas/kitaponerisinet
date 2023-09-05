$(document).ready(function(){
  $('.page_up').mouseover(function () { 
    $('.page_up').css('width','110px').css('height','90px');
    $('#fa_arrow_up').css('font-size','60px');
  });
  $('.page_up').mouseleave(function(){
    $('.page_up').css('width','90px').css('height','75px');
    $('#fa_arrow_up').css('font-size','50px');
  });
});