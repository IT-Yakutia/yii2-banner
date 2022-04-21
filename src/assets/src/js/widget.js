$(document).ready(function(){
    $("#hero").owlCarousel({
        loop: true,
        rewind: true,
        margin: 0,
        responsiveClass: true,
        center: true,
        items:1,
        nav:true,
        loop:true,
        responsive:{
            0:{
                dots:false,
            },
            700:{
                dots:true,
            }
        }
    });
});