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
    'user_login' => array(
      'template' => 'user-login',
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

drupal_add_js(drupal_get_path('theme', variable_get('theme_default','none')).'/scripts/forward_validation.js');

?>