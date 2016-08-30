$(function(){

$('.nav > button').click(function(){


//    if(!$('.nav > ul').is('.on')) $('.nav > ul').addClass('on').fadeIn(400).slideDown(800);
//    else $('.nav > ul').removeClass('on').fadeOut(400).slideUp(800);

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
