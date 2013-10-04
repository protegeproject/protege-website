(function($) {
  $('.tooltip-activate').hover(function() {
    $(this).find('.tooltip').toggleClass('hidden');
  })

  $('a[data-toggle="tab"]').on('shown', function (e) {
  e.target // activated tab
  e.relatedTarget // previous tab
})
})(jQuery);
