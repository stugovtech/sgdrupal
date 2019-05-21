<?php

/**
 * Implements hook_panels_layouts().
 */
function suitcase_interim_media_card_panels_layouts() {
  $items['media_card'] = array(
    'title' => t('Media Card'),
    'category' => t('Suitcase: Media Card'),
    'icon' => 'media_card.jpg',
    'theme' => 'media_card',
    'admin css' => 'media_card_admin.css',
    'regions' => array(
      'media_left' => t('Left'),
      'media_heading' => t('Heading'),
      'media_body' => t('Body'),
    ),
  );
  return $items;
}


