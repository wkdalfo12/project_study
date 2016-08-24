$(function(){
    
    $('.photos').children('ul').children('li').click(function(){
        
        var idx = $(this).index();
      blindFn();
       
    
    $('.bb').children('p').eq(idx).children('img').fadeIn()
    
   
    
      $('.disnone').css({
          'zIndex':'100'
      })
      
       
       
       // //   x버튼
     
      $('.disnone .bb p').eq(idx).children('a').css({
          'display':'inline-block'
      }).parent('p').siblings().children('a').css({
          'display':'none'
      })
      
      
      $('.disnone .bb p').on('click',$('.btn'),function(){
          
          $('.disnone').css({
          'zIndex':'-10'
            })
          $('.disnone .bb').children('p').eq(idx).children('img').fadeOut();
          
          $('.blind').fadeOut(function(){
              $(this).remove();
          })
              })
    
       function blindFn(){
           var bl_Tag ="";
           bl_Tag += '<div class="blind">';
           bl_Tag += '</div>'
           
           $('body').prepend(bl_Tag);
           
           $('.blind').show(1000);
       }
       
        return false;
       
    })
   
   
   
})