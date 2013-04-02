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

function opfbs_menu_tree__user_menu($variables){
  return '<ul class="nav nav-pills">' . $variables['tree'] . '</ul>';
}


?>
