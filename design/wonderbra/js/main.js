(function($) {
    $('#whats-style ul').bxSlider({
        auto: true,
        pause: 2000,
        pager: false,
        minSlides: 5,
        maxSlides: 5,
        moveSlides: 1,
        slideWidth: 234,
        prevText: '<img src="/design/wonderbra/images/main/ico_arrow_prev.png" height="100" alt="이전">',
        nextText: '<img src="/design/wonderbra/images/main/ico_arrow_next.png" height="100" alt="다음">',
        onSliderLoad: function(currentIndex){
            $('#whats-style .bx-wrapper .bx-viewport').css('height', 'auto');
        }
    });
})(jQuery);
