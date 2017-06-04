/**
 * @file
 * Resizable transcription window behavior.
 */
(function ($) {

  Drupal.behaviors.resize_transcription_window = {
    attach: function(context, settings) {
      $("#apwa_inline_webform_target_wrapper").resizable({handles: "w"});
    }
  };
})(jQuery);
