$('.open-btn-1').on('click', function() {
  $(".modal").addClass('visible');

  // setTimeout(function() {
  //   $('.modal').removeClass('visible');
  // }, 8000);
  
  // $(".close-btn").on('click', function(){
  //   $('.modal').removeClass('visible');
  // });
});

$(document).ready(function () {
    $(".icon").click(function () {
    	$("body").toggleClass("no-scroll");
        $(".web-frame").toggleClass("no-scroll");
        $(".mobilenav").fadeToggle(500);
        $(".top-menu").toggleClass("top-animate");
        $(".mid-menu").toggleClass("mid-animate");
        $(".bottom-menu").toggleClass("bottom-animate");
    });
});