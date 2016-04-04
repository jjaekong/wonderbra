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
    $(document).on('click', '#navbar > .gnb > ul > li > a', function() {
        $('#navbar > .gnb > ul > li').removeClass('active');
        $('#navbar > .gnb > ul > li > a > .glyphicon').removeClass('glyphicon-menu-up').addClass('glyphicon-menu-down');
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
    
    // 상단 검색버튼
    $(document).on('click', '#header .btn-search-open', function() {
        $('#header > .search').show().find('.form-control').focus();
        $(this).removeClass('btn-search-open').addClass('btn-search-close');
        $(this).html('<img src="/design/wonderbra/mobile/images/ico_close.png" alt="검색영역 닫기">');
    });
    $(document).on('click', '#header .btn-search-close', function() {
        $('#header > .search').hide();
        $(this).removeClass('btn-search-close').addClass('btn-search-open');
        $(this).html('<img src="/design/wonderbra/mobile/images/ico_search.png" alt="검색영역 열기">');
    });
    
})(jQuery);