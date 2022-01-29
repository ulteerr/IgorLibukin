import bxSlider from 'bxslider'
$(document).ready(function(){
    $('.slider ul').bxSlider({
        pager: true,
        controls: true,
        auto: false,
        mode: 'fade',
        pause: 10000,
        minSlides: 1,
        maxSlides: 1
    });
});
