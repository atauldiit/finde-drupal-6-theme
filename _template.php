<?php

/**
* Registers overrides for various functions.
*
* In this case, overrides three user functions
*/
function finde_theme() {

  return array(
    'user_register' => array(
      'template' => 'user-register',
      'arguments' => array('form' => NULL),
    ),
  );
}

function finde_preprocess_user_register(&$variables) {
  #$variables['form']['account']['name']['#title'] = 'User Name';
  #$variables['form']['account']['name']['#description'] = '';
  $variables['form']['account']['mail']['#description'] = '';
  #$variables['form']['account']['pass']['#description'] = '';
  $variables['form']['submit']['#value'] = 'Send';

  /*$variables['form']['account']['name']['#required'] = false;
  $variables['form']['account']['mail']['#required'] = false;
  $variables['form']['account']['pass']['pass1']['#required'] = false;
  $variables['form']['account']['pass']['pass2']['#required'] = false;
  $variables['form']['Personal Information']['profile_first_name']['#required'] = false;
  $variables['form']['Personal Information']['profile_last_name']['#required'] = false;*/
}

#drupal_add_js(drupal_get_path('theme', variable_get('theme_default','none')).'/scripts/registration_validation.js');

//********************************************
// PRIMARY LINK MENU ITEM INFO
//********************************************

/**
 * Returns a rendered menu tree.
 *
 * @param $tree
 *   A data structure representing the tree as returned from menu_tree_data.
 * @return
 *   The rendered HTML of that data structure.
 */
function main_menu_tree_output($tree) {
  $output = '';
  $items = array();

  // Pull out just the menu items we are going to render so that we
  // get an accurate count for the first/last classes.
  foreach ($tree as $data) {
    if (!$data['link']['hidden']) {
      $items[] = $data;
    }
  }

  $num_items = count($items);
  foreach ($items as $i => $data) {
    
    $extra_class = NULL;
    //$extra_class = get_link_color($items[$i]['title']);
    
    if (stristr($i, 'active')) {
        $extra_class .= " active";
      }
    
    
    if ($i == 0) {
      //$extra_class = 'first';
    }
    if ($i == $num_items - 1) {
      //$extra_class = 'last';
    }
    $link = main_menu_item_link($data['link']);
   
    if ($data['below']) {
      $extra_class = "parent ";
      if(theme_get_setting(menu_type) == "splitmenu") {
      	$output .= main_menu_item($link, $data['link']['has_children'], '', $data['link']['in_active_trail'], $extra_class);
      }	
      else {	
      	$output .= main_menu_item($link, $data['link']['has_children'], sub_menu_tree_output($data['below']), $data['link']['in_active_trail'], $extra_class);
      }
    }
    
    else {
      $output .= main_menu_item($link, $data['link']['has_children'], '', $data['link']['in_active_trail'], $extra_class);
    }
  }
  return $output ? main_menu_tree($output) : '';
}



function sub_menu_tree_output($tree) {
  $output = '';
  $items = array();

  // Pull out just the menu items we are going to render so that we
  // get an accurate count for the first/last classes.
  foreach ($tree as $data) {
    if (!$data['link']['hidden']) {
      $items[] = $data;
    }
  }

  $num_items = count($items);
  foreach ($items as $i => $data) {
    
    $extra_class = NULL;
    //$extra_class = get_link_color($items[$i]['title']);
    
    if (stristr($i, 'active')) {
        $extra_class .= " active";
      }
    
    
    if ($i == 0) {
      //$extra_class = 'first';
    }
    if ($i == $num_items - 1) {
      //$extra_class = 'last';
    }
    $link = sub_menu_item_link($data['link']);
    if ($data['below']) {
      $extra_class = " parent ";
      $output .= sub_menu_item($link, $data['link']['has_children'], sub_menu_tree_output($data['below']), $data['link']['in_active_trail'], $extra_class);
    }
    else {
      $output .= sub_menu_item($link, $data['link']['has_children'], '', $data['link']['in_active_trail'], $extra_class);
    }
  }
  return $output ? sub_menu_tree($output) : '';
}

/**
 * FULL MENU TREE
 */
function main_menu_tree($tree) {
  	return '<ul class="menutop" id="horiznav">'. $tree .'</ul>';
}

/**
 * SUB MENU TREE
 */
function sub_menu_tree($tree) {
  	return '<ul>'. $tree .'</ul>';
}

/**
  * MENU ITEM 
 */
function main_menu_item($link, $has_children, $menu = '', $in_active_trail = FALSE, $extra_class = NULL) {
  //$class = ($menu ? 'expanded' : ($has_children ? 'collapsed' : 'leaf'));
  $class = "";
  if (!empty($extra_class)) {
    $class .= $extra_class;
  }
  if ($in_active_trail) {
    $class .= 'active';
  }
  return '<li class="'. $class .'">'. $link . $menu . "</li>\n";
}

/**
  * SUB MENU ITEM 
 */
function sub_menu_item($link, $has_children, $menu = '', $in_active_trail = FALSE, $extra_class = NULL) {
  //$class = ($menu ? 'expanded' : ($has_children ? 'collapsed' : 'leaf'));
  $class = "";
  if (!empty($extra_class)) {
    $class .= $extra_class;
  }
  if ($in_active_trail) {
    $class .= 'active';
  }
  return '<li class="'. $class .'">'. $link . $menu . "</li>\n";
}


/**
 * Generate the HTML output for a single menu link.
 *
 * @ingroup themeable
 */
function main_menu_item_link($link) {
  if (empty($link['localized_options'])) {
    $link['localized_options'] = array();
  }
  if(strlen(strstr($link['href'],"http"))>0) {
  	$href = $link['href'];	
  }
  else {
  	if(variable_get('clean_url', 0)) {
  		$href = $link['href'] == "<front>" ? base_path() : base_path() . drupal_get_path_alias($link['href']);
  	}
  	else {
  		$href = $link['href'] == "<front>" ? base_path() : base_path() . "?q=" . drupal_get_path_alias($link['href']);
  	}
  	
  }	
  $this_link = "<a class='topdaddy' href='" . $href . "'><span>" . $link['title'] . "</span></a>"; 	

  return $this_link;
}

 function sub_menu_item_link($link) {
  if (empty($link['localized_options'])) {
    $link['localized_options'] = array();
  }
  if(strlen(strstr($link['href'],"http"))>0) {
  	$href = $link['href'];	
  }
  else {
  	if(variable_get('clean_url', 0)) {
  		$href = $link['href'] == "<front>" ? base_path() : base_path() . drupal_get_path_alias($link['href']);
  	}
  	else {
  		$href = $link['href'] == "<front>" ? base_path() : base_path() . "?q=" . drupal_get_path_alias($link['href']);
  	}
  }
  $this_link = "<a href='" . $href . "'><span>" . $link['title'] . "</span></a>"; 	

  return $this_link;
}
?>