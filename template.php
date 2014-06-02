<?php
/**
 * @file
 * Theme functions
 */

require_once dirname(__FILE__) . '/includes/structure.inc';
require_once dirname(__FILE__) . '/includes/comment.inc';
require_once dirname(__FILE__) . '/includes/form.inc';
require_once dirname(__FILE__) . '/includes/menu.inc';
require_once dirname(__FILE__) . '/includes/node.inc';
require_once dirname(__FILE__) . '/includes/panel.inc';
require_once dirname(__FILE__) . '/includes/user.inc';
require_once dirname(__FILE__) . '/includes/view.inc';

/**
 * Implements hook_css_alter().
 */
function tnd_css_alter(&$css) {
  $radix_path = drupal_get_path('theme', 'radix');

  // Radix now includes compiled stylesheets for demo purposes.
  // We remove these from our subtheme since they are already included 
  // in compass_radix.
  unset($css[$radix_path . '/assets/stylesheets/radix-style.css']);
  unset($css[$radix_path . '/assets/stylesheets/radix-print.css']);
}

/**
 * Implements template_preprocess_page().
 */
function tnd_preprocess_page(&$variables) {
  // Add copyright to theme.
  if ($copyright = theme_get_setting('copyright')) {
    $variables['copyright'] = check_markup($copyright['value'], $copyright['format']);
  }
  
#  $variables['language_homes'] = menu_tree('menu-language-homes');
#  dsm($variables['language_homes']);
#  $variables['language_homes']['#theme_wrappers'] = array('menu_tree__navbar_right');
#  dsm($variables['language_homes']);
#  dsm($variables['main_menu']);
  $variables['language_homes'] = '<ul class="menu nav navbar-nav navbar-right language-homes"><li><a id="switchru" href="/ru">RU</a></li><li><a id="switchen" href="/en">EN</a></li></ul>';

//  dsm($variables['language_homes']);

  
  // Format and add main menu to theme.
//  $variables['secondary_menu'] = menu_tree(variable_get('menu_secondary_links_source', 'main-menu'));
//  $variables['secondry_menu']['#theme_wrappers'] = array('menu_tree__nav_pills_stacked');
//print_r($variables['secondary_menu']);
//print_r($variables['main_menu']);

// Add search_form to theme.
$variables['search_form'] = '';
if (module_exists('search') && user_access('search content')) {
  $search_box_form = drupal_get_form('search_form');
  $search_box_form['basic']['keys']['#title'] = '';
  $search_box_form['basic']['keys']['#size'] = 20;
  $search_box_form['basic']['keys']['#attributes'] = array('placeholder' => t('Search'));
  $search_box_form['basic']['keys']['#attributes']['class'][] = 'form-control';
  $search_box_form['basic']['submit']['#value'] = t('Search');
  $search_box_form['#attributes']['class'][] = 'navbar-form';
  $search_box_form['#attributes']['class'][] = 'navbar-right';
  $search_box = drupal_render($search_box_form);
  $variables['search_form'] = (user_access('search content')) ? $search_box : NULL;
}
  

}


function tnd_menu_tree__navbar_right(&$variables) {
  return '<ul class="menu nav navbar-nav navbar-right">' . $variables['tree'] . '</ul>';
}