/**
 * @file
 * Resizable transcription window behavior.
 */
(function ($) {

  Drupal.behaviors.transcript_wf = {
    attach: function(context, settings) {
      var load_target = function(pid, target) {
        url = '/islandora/object/'+pid+'/transcript_wf/getajax';
        $(target).load(url);
      };
      $('#transcript_wf_link').click(function() {

        load_target(settings.apwa_iw.pid, settings.apwa_iw.target);
        $('#islandora_object_display_wrapper').addClass('display-webform');
        $('#transcript_wf_link').hide();
      });
    }
  };
})(jQuery);
