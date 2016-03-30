(function($) {
    
    // GNB 메뉴 보이기, 닫기
    $(document).on('click', '#header .btn-navbar-open', function() {
        $('body').addClass('navbar-opened');
        $('#navbar .btn-navbar-close').focus();
    });
    $(document).on('click', '#navbar .btn-navbar-close', function() {
        $('body').removeClass('navbar-opened');
        $('#header .btn-navbar-open').focus();
    });
    
    // GNB 메뉴 클릭
    $(document).on('click', '#navbar > .gnb > li > a', function() {
        $('#navbar > .gnb > li').removeClass('active');
        $('#navbar > .gnb > li > a > .glyphicon').removeClass('glyphicon-menu-up').addClass('glyphicon-menu-down');
        $(this).parent().addClass('active');
        $(this).find('.glyphicon').removeClass('glyphicon-menu-down').addClass('glyphicon-menu-up');
        return false;
    });
    
    // 스와이프 영역
    $(".carousel-inner").parent().swiperight(function() {  
        $(this).carousel('prev');  
    });  
    $(".carousel-inner").parent().swipeleft(function() {  
        $(this).carousel('next');  
    }); 
    
})(jQuery);