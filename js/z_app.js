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