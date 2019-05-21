<?php

/*
 * Implements THEMENAME_alpha_preprocess_section
 */
function suitcase_interim_alpha_preprocess_section(&$vars) {
  if ($vars['elements']['#section'] == 'header') {
    $vars['attributes_array']['role'] = 'banner';
  }
  if ($vars['elements']['#section'] == 'footer') {
    $vars['attributes_array']['role'] = 'contentinfo';
  }
  if ($vars['elements']['#section'] == 'content') {
    $vars['attributes_array']['aria-label'] = 'main content';
  }
}