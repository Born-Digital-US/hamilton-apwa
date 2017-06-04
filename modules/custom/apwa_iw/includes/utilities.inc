<?php

/**
 * @file
 * This file contains the functions to render the transcript tab.
 */

/**
 * Renders the TRANSCRIPT_WF page.
 *
 * @pararm AbstractObject $object
 *   The object the TRANSCRIPT belongs to.
 *
 * @return array
 *   A renderable array representing the tab.
 */
function islandora_transcript_wf_view(AbstractObject $object) {
  $transcript = $object['TRANSCRIPT_WF']->content;
  return array(
    'transcript' => array(
      '#markup' => '<pre>' . wordwrap($transcript) . '</pre>',
    ),
  );
}

function islandora_transcript_wf_getajax(AbstractObject $object) {
  $return = array(
    '#type' => 'container',
    '#attributes' => array(
      'class' => array('inline-webform-target'),
      'id' => 'webform-ajax-wrapper-transcript'
    ),
    'title' => array(
      '#theme' => 'html_tag',
      '#tag' => 'h2',
      '#value' => t('Transcription'),
    ),
    'body' => array(
      '#type' => 'container',
      '#attributes' => array(
        'class' => array(),
      ),
      array(
        '#markup' => $object['TRANSCRIPT_WF']->content,
      ),

    ),
  );

  return $return;
}

function islandora_transcript_wf_ajax_callback($page_callback_result) {
  // Only render content
  $content = $page_callback_result;
  print(render($content));
  return;

  // Add CSS and JS files, add some markup
  $html = '<html><head><title></title>' . drupal_get_css() . drupal_get_js() . '</head><body class="jquery-ajax-load">' . $content . '</body></html>';
  print $html;

  // Perform end-of-request tasks.
  drupal_page_footer();
}