$(function(){
  //include
  $('#header').load('include/header.html');
  $('#footer').load('include/footer.html');

  //header ->
  //hamburger menu
  $(document).on('click', '#hamburger, a[href^="./"]', function(){
    $('#nav-mask').fadeToggle(500);
    $('#hamburger-icon').toggleClass('show');
  });

  //change header color
  $(window).on('load scroll', function(){
    if($(window).scrollTop() < $('#mv-img').height() - 50 ){
      $('#logo').removeClass('blend');
    }else{
      $('#logo').addClass('blend');
    }
  });
  //-> header

  //->main
  // set mv height
  var $mv = $('#mv-img')
  var img = new Image();
  img.src = $mv.attr('src')
  $(window).on('load', function(){
    $mv.height(img.height);
    $('.mv, #rect').height(img.height * 1.16);
  })
});
