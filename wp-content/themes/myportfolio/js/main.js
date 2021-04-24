function selectorEscape(val) {
    return val.replace(/[ !"$%&'()*+,.\/:;<=>?@\[\\\]^`{|}~]/g, '\\$&');
}
jQuery(function ($) {
        // PhotoSwipe
        $('a[href^="#"]').click(function () {
            var time = 500;
            var href = $(this).attr("href");
            var target = $(href == "#" || href == "" ? 'html' : selectorEscape(href));
            var position = target.offset().top;
            $("html,body").animate({ scrollTop: position }, time, "swing");
            return false;
        });

        // CSS
        $(".item-text").click(function() {
          $(this).toggleClass("sp-text-display");
        });
    });
