$(function(){

$('.nav > button').click(function(){
    $('.nav ul').toggle()
})

var aa = true;
$(window).resize(function(){

   if ( $(window).width() > 888 && aa){
       $('.nav ul').css({
           'display':'block'
       })
       aa = false;
   }
   else if( $(window).width() < 888 && !aa){
       $('.nav ul').css({
           'display':'none'
       })
       aa = true;
   }
})
})
