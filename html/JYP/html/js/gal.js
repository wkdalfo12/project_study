$(function(){

  


    $('.photos').children('ul').children('li').click(function(){
            var idx = $(this).index();
            blindFn();
            black();

    // // 클릭했을때 이미지뜨게
    $('.bb').children('p').eq(idx).children('img').fadeIn()
          $('.disnone').css({
              'zIndex':'100'
          })

    // //   x버튼
    $('.disnone .bb p').eq(idx).children('a').css({
          'display':'block',
    }).parent('p').siblings().children('a').css({
          'display':'none'
    })

    // //   x버튼 누르면 닫히게
    $('.disnone .bb p').on('click',$('.btn'),function(){
          $('.disnone').css({
              'zIndex':'-10'
            })
          $('.disnone .bb').children('p').eq(idx).children('img').fadeOut();

          $('.blind').fadeOut(function(){
              $(this).remove();
          })

          $('.black').fadeOut(function(){
              $(this).remove();
          })
    })

    function blindFn(){
           var bl_Tag ="";
           bl_Tag += '<div class="blind">';
           bl_Tag += '</div>'
           $('body').prepend(bl_Tag);
           $('.blind').show();
    }

    // 검은 막
    function black(){
            var add ='';
                add += '<div class="black">'
                add += '</div>'

                $('body').prepend(add)
                $('html, body').css({'overflow':'hidden'});
                $('.black').fadeTo(0,1)
    }
        return false;
    })
})
