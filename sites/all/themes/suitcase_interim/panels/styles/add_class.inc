<?php

// Plugin definition
$plugin = array(
  // Title and description of the plugin
  'title' => t('Add Class'),
  'description' => t('Add a class to a panel.'),
  // Define a theme function for this plugin
  'render region' => 'add_class_style_render_region',
  // This defines the settings form for the plugin
  'settings form' => 'add_class_style_settings_form',
);

/**
 * Settings form callback.
 */
function add_class_style_settings_form($settings) {

  $form = array();

  $form['class'] = array(
    '#type' => 'textfield',
    '#title' => t('CSS Classes'),
    '#description' => t('Enter CSS classes for this style. Separate multiple classes by spaces.'),
    '#default_value' => (isset($settings['class'])) ? $settings['class'] : '',
  );

  return $form;
}

/**
 * Region render callback.
 *
 * Please note that it's a theme function
 * and has to start with 'theme_' prefix.
 */
function theme_add_class_style_render_region($vars) {

  // Variable $vars['settings'] gets the class added in the form.
  $output = '<div class="'. $vars['settings']['class'] .'">';

  // Variable $vars['panes'] contains an array of all
  // panel panes in current region. Collect them into
  // variable.
  foreach ($vars['panes'] as $pane) {
    $output .= $pane;
  }

  $output .= '</div>';

  return $output;
}