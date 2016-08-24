$(function(){
    
    //1번문제
    $('header div ul li a').mouseenter(function(){
        $(this).css({
            'background-color':'red',
            'color':'#FFF'
        })
       
    })
     $('header div ul li a').mouseleave(function(){
        $(this).css({
            'background-color':'transparent',
            'color':'#000'
        })
         
    })
    
    //2번문제
    
     var offsetTop = [];
     
    $('header div ul li').each(function(i,e){
        
        $(this).click(function(){
           var lii = $('header div ul li').eq(i).index();
           
           $('body,html').animate({
               scrollTop:offsetTop[lii]
           })
        })
    })
    
     $('.content > section').each(function(){
              offsetTop.push($(this).offset().top)
             // console.log(offsetTop)
        })
   
   //3번문제 - 슬라이드배너 참고
    
      
      //랜덤
  
     var idx = Math.floor(Math.random() *$('.slidebanner li').length)
     randoms(idx);
     function randoms(i){
          $('.slidebanner li').eq(i).children('img').css({
              'display':'block',
               left:'0'
          }).parent().addClass('on').siblings().removeClass('on')
     }
    
  
      function movement(start,end,selector){
          
          $('.slidebanner li').eq(selector).children('img').css({
              'display':'block',
              'left':start
          }).stop().animate({
              left:end
          }).parent().addClass('on').siblings().removeClass('on')
          
          if(selector == $('.slidebanner li').length){
              idx = 0
              movement("100%","0",idx)
          }else if(selector < 0){
              idx = $('.slidebanner li').length-1;
              movement("-100%","0",idx)
          }
        
      }
      
      $('button.next').click(function(){
            // console.log("실행")
           movement("0","-100%",idx);
           idx++
           movement("100%","0",idx)
      })
      
      $('button.prev').click(function(){
          // console.log("실행중")
         movement("0","100%",idx);
         idx--
         movement("-100%","0",idx)
      })
      
      
      var play = setInterval(function(){
             $('.next').click();                    
        },4500)                                      
         
         
        $('.slidebanner').mouseenter(function(){
            clearInterval(play)              
        }).mouseleave(function(){                  
            
            play = setInterval(function(){
            $('.next').click();
            
            },4500)
        })
      
      $('.slidebanner li a').click(function(){
          idx = $(this).parent().index();
          var his = $('.slidebanner li.on').index();
          
          movement("0","-100%",his);
          movement("100%","0",idx);
          
          if(idx > his){
              movement("0","-100%",his);
              movement("100%","0",idx);
              
          }else if(idx < his){
              movement("0","100%",his);
              movement("-100%","0",idx);
          }
          return false;
      })
   
   // 4번문제
     
      
      var play2 = setInterval(function(){
      var idxx = $('.fadebanner li.on').index()
             $('.fadebanner li').eq(idxx).children('img').fadeOut(function(){
                    if(idxx == 4){
                $('.fadebanner li.on').removeClass('on');
                $('.fadebanner li:first-child').addClass('on').children('img').fadeIn()
            }else{
                    $('.fadebanner li.on').removeClass('on').next('li').addClass('on').children('img').fadeIn()
            }
                 
             })
            
            // console.log(idxx)
        },4800)     
          
        $('.fadebanner').mouseenter(function(){
            clearInterval(play2)              
        }).mouseleave(function(){     
         play2 = setInterval(function(){
              var idxx = $('.fadebanner li.on').index()
             $('.fadebanner li').eq(idxx).children('img').fadeOut(function(){
                    if(idxx == 4){
                $('.fadebanner li.on').removeClass('on');
                $('.fadebanner li:first-child').addClass('on').children('img').fadeIn()
            }else{
                    $('.fadebanner li.on').removeClass('on').next('li').addClass('on').children('img').fadeIn()
            }
                 
             })
            
            // console.log(idxx)
        },4800)   
            
            //
            
        })
        
        
        $('.fadebanner li a').click(function(){
          
           var hisidx = $(this).parent().index(); 
           var onidx = $('.fadebanner li.on').index();
          // console.log(hisidx,onidx)
           
            //  $('.fadebanner li').removeClass('on');
            //  $('.fadebanner li a img').fadeOut();
            //  $(this).parent().addClass('on').children('img').fadeIn();
            
            $('.fadebanner li').eq(onidx).removeClass('on').children('img').fadeOut(function(){
                
                 $('.fadebanner li').eq(hisidx).addClass('on').children('img').fadeIn()
            })
            
             
             
        })
        
   
    //5번 동영상 문제 - youtube.html 참고 
    
       $('.movie-view ul li a').click(function(){
           var aa = $(this).parent().index();
           //console.log(aa)
           var url = $(this).attr('href');
           var location = 'https://www.youtube.com/embed/'+url+'?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen'
         
          $('.view iframe').attr('src',location)
          
          $(this).children('img').fadeTo(1000,0.5).parent().parent().siblings().find('img').css({
              'opacity':'1'
          })
           return false;
           
       })
       
       
       // 6번문제 - spyscroll.html참고 
      
         $(window).scroll(function(){
             var sctop = $(window).scrollTop()
             $('.wing').stop().animate({
                 top:sctop
             })
         })
         
        // 7번문제 - modalpopup.html참고 
        
         function popMaker(id){
                
                var contents = $('.'+id).html();
              
                var tag = "";
               
                tag +='<div class="popup '+id+'" >';
                tag +='<button class="closebtn">닫기</button>';
                tag +='<div class="content">';
                tag += contents;
            
                tag +='</div>';
                tag +='</div>';
                
                
                $('body').append(tag);
            //   centerPosition($('.'+id));
                
            }
       
          //장막생성
        function blindFn(){
            var bl_Tag ="";
            bl_Tag += '<div class="blind">';
            bl_Tag += '</div>'
            
            $('body').prepend(bl_Tag);
            $('.blind').fadeTo(1000,0.5);
        }
        
       
         function centerPosition(target){
                
                // target.animate({
                //     top:100
                // })
                
                target.css({
                    left:"50%",
                    marginLeft:function(){
                        
                        var aa = $(this).css('width')
                        //console.log(aa)
                        
                        return -parseInt(aa)/2 + 'px';
                    },
                    top:"50%",
                    marginTop:function(){
                        
                        var aa = $(this).css('height')
                      
                        return -parseInt(aa)/2 + 'px';
                    }
                    
                })
                
            }
           // 닫기
         var closeEvent = function(){
                //$('.blind').remove();
                $('.popup').fadeOut(1000,function(){
                    $(this).remove();
                })
                
                $('.blind').fadeOut(1000,function(){
                    $(this).remove();
                })
            }
        
           //오픈
        var openPopup = function(){
            var id = $(this).attr('id');
           
            blindFn();
            popMaker(id);
             $('.popup').show(1000);
        }
      
        //클릭이벤트장막
     $('.btngroup button').click(openPopup);
     $('body').on('click','.closebtn',closeEvent); 
     
     
     
     
})

   
   
   

   
   
   
   
   
