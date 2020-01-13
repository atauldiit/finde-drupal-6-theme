<?php
drupal_set_title('Login für registrierte Mitglieder..');
#echo '<pre>';print_r($form);echo '</pre>';
#echo '<p>Geben Sie Ihre Emailadresse und Ihr Passwort ein, um bei <strong>findepflegedienst.de</strong> anzumelden.</p>';
echo '<p>Geben Sie Ihre Emailadresse und Ihr Passwort ein, um bei sich bei <strong>findepflegedienst.de</strong> anzumelden</p>';
print drupal_render($form['name']);
print drupal_render($form['pass']);
print drupal_render($form['submit']);
print drupal_render($form['form_build_id']);  
print drupal_render($form['form_id']);
?>
<div></div>
<div><a href="/user/password">Passwort vergessen?</a></div>
<div><a href="/nursing_register">Noch kein Mitglied? Hier k&ouml;nnen Sie sich registrieren</a></div>