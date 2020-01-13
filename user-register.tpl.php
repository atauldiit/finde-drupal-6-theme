<div class="my-form-wrapper"><?php global $user;?>
  <?php print drupal_render($form['account']['mail']);?>
  <?php print drupal_render($form['account']['pass']['pass1']);?>
  <?php print drupal_render($form['account']['pass']['pass2']);?>  
  <?php print drupal_render($form['account']['status']);?>  
  <?php print drupal_render($form['account']['notify']);?>    
  <?php print drupal_render($form['Personal information']['profile_name']);?>  
  <?php print drupal_render($form['Personal information']['profile_gender']);?>  
  <?php print drupal_render($form['Personal information']['profile_cnumber']);?>
  <?php #if($user->uid){?>
  <?php print drupal_render($form['Address information']['profile_zip']);?>
  <?php print drupal_render($form['Address information']['profile_wahlen']);?>
  <?php print drupal_render($form['Address information']['profile_distance']);?>
  <?php #}?>  
  <?php print drupal_render($form['picture']['picture_upload_register']);?>  
  <?php print drupal_render($form['terms_of_use']['terms_of_use']);?>
  <div class="form-submit-div"><?php print drupal_render($form['submit']);?></div>
  <?php print drupal_render($form['destination']);?>  
  <?php print drupal_render($form['timezone']);?>  
  <?php print drupal_render($form['form_build_id']);?>  
  <?php print drupal_render($form['form_id']);?>  
  <?php print drupal_render($form['form_token']);?>  
  <?php #echo '<pre>';print_r($form);echo'</pre>'?>
</div>