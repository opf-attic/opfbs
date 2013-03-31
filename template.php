<?php

$theme_path = drupal_get_path('theme', 'opfbs');
require_once $theme_path . '/includes/menu.inc';

/**
 * Returns the correct span class for a region
 */
function _opfbs_content_span($columns = 1) {
  $class = FALSE;

  switch($columns) {
    case 1:
      $class = 'span12';
      break;
    case 2:
      $class = 'span8';
      break;
    case 3:
      $class = 'span4';
      break;
  }

  return $class;
}


?>
