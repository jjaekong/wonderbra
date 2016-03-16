(function($) {
    
    // GNB 폴딩
    $(document).on('mouseenter focusin', '#header .menu', function() {
        $('#header').addClass('menu-opened');
    });
    $(document).on('mouseleave', '#header', function() {
        $('#header').removeClass('menu-opened');
    });
    $(document).on('blur', '#header .menu', function(e) {
        if ($('#header .menu').find(e.relatedTarget).length === 0) {
            $('#header').removeClass('menu-opened');
        }
    });
    
    // 윈도우 로딩 후 상단 배너가 있을 때
    existTopBanner = ($('#topbn').length === 1) ? true : false;
    console.log(existTopBanner);
    $(window).on('load', function() {
        $('#topnav').css({ 'position' : 'absolute', 'top' : $('#topbn').height() });
        $('#header').css({ 'position' : 'absolute', 'top' : $('#topbn').height() + $('#topnav').height() });
    });
    $(window).on('scroll', function() {
        var scrollTop = $(this).scrollTop();
        if (existTopBanner) {
            if ($(this).scrollTop() > $('#topbn').height()) {
                $('#topnav').css({ 'position' : 'fixed', 'top' : 0 });
                $('#header').css({ 'position' : 'fixed', 'top' : $('#topnav').height() });
            } else {
                $('#topnav').css({ 'position' : 'absolute', 'top' : $('#topbn').height() });
                $('#header').css({ 'position' : 'absolute', 'top' : $('#topbn').height() + $('#topnav').height() });
            }
        }
    }); 
    
})(jQuery);