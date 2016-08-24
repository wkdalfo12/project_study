$(function(){
    
    $('.photos').children('ul').children('li').click(function(){
        
        var idx = $(this).index();
      
       
    
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
          $('.disnone .bb').children('p').eq(idx).children('img').fadeOut()
       
              })
    
       function blindFn(){
           var bl_Tag ="";
           bl_Tag += '<div class="blind">';
           bl_Tag += '</div>'
           
           $('body').prepend(bl_Tag);
           
           $('.blind').css({
                    position:'absolute',
                    backgroundColor:'#000',
                    left:0,
                    right:0,
                    top:0,
                    bottom:0,
                    display:'none'
                }).show(1000,0.5);
       }
        return false;
       
    })
   
   $(window).resize(function(){
       
             if($(window).width() > 905){
                      $('.nav ul').css({'display':'block'})
                  }else{
                      $('.nav ul').css({ 'display':'none'})
                     
                  }
       
   })
   
   
}) 