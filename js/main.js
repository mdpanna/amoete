$(document).ready(function () {
    $(window).bind('scroll', function () {
        if ($(window).scrollTop() > 350) {
            $(".top_nav-part").addClass("top_nav-part_active");
        } else {
            $(".top_nav-part").removeClass("top_nav-part_active");

        }
    })



    $(".navbar-toggler").click(function () {
        $(".cust-collapse").toggleClass('d-flex');
    })




    $(".close-btn").click(function () {
        $(".cust-collapse").toggleClass('d-flex');
    })


    $(".navbar-nav .nav-link").click(function () {
        $(".cust-collapse").toggleClass('d-flex');
    })



})
