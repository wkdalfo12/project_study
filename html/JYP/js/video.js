$(function(){
  
  $('#video-list ul li a').click(function(){
      
      var url = $(this).attr('href');
      var location = 'https://www.youtube.com/embed/'+url+'?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen'
      
      $('.movie iframe').attr('src',location);
      return false;
  })
})