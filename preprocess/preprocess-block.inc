<?php

/*
 * Implements THEMENAME_alpha_preprocess_block
 */
function suitcase_interim_alpha_preprocess_block(&$vars) {
  // Support aria-labelledby
  if ($vars['block']->subject) {
    $vars['title_attributes_array']['id'] = drupal_html_id($vars['block']->subject);
    $vars['attributes_array']['aria-labelledby'] = $vars['title_attributes_array']['id'];
  }
}