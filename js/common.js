(function($) {
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
})(jQuery);