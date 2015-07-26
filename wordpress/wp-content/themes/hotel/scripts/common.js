(function() {
  jQuery(function($) {
    return $('#js-pagetop').on({
      'click': function() {
        return $('html,body').animate({
          scrollTop: 0
        });
      }
    });
  });

}).call(this);
