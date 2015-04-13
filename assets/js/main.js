/**
 Main functions file.

 @since 0.1.0
 @package ProjectFreedom
 */
(function ($) {
    'use strict';

    $(document).foundation();

    // Prevent window scroll when scrolling sidebar
    $('#site-sidebar').bind('mousewheel', function (e) {
        $(this).scrollTop($(this).scrollTop() - e.originalEvent.wheelDeltaY);
        return false;
    });

})(jQuery);