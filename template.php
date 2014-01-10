<?php

/**
 * Implements theme_preprocess_views_view
 *
 * @param  [type] $vars [description]
 * @return [type]       [description]
 */
function wireframe_preprocess_views_view(&$vars) {
  $view = $vars['view'];
  switch($view->name) {
    case 'event':
      // dsm($view->field['title']->original_value);
      $view->build_info['title'] = $view->field['title']->original_value;
      break;
  }
  // view block
  // if ($vars['view']->name == 'viewName') {
  //   //update your title
  //   $vars['view']->build_info['title'] = '---Tittle---';
  // }
}
