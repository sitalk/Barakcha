(function($) {
  Drupal.behaviors.slider_example = {
    attach: function(context, settings) {
      $('.slider-widget-wrapper').each(function() {
        var $sliderWrapper = $(this);
        $('<div class="slider-widget" />').appendTo($sliderWrapper).slider({
          range: true,
          values: [$sliderWrapper.find('input:first').val(), $sliderWrapper.find('input:last').val()],
          slide: function(event, ui) {
            $sliderWrapper.find('input:first').val(ui.values[0]);
            $sliderWrapper.find('input:last').val(ui.values[1]);
          },
    stop: function(event, ui){
                    $(this).parents('form').submit();
                  }

        });
      });
    }
  };
})(jQuery);
