<?php
print render($form['field_profile_first_name']);
print render($form['field_profile_last_name']);
print render($form['account']['mail']);
print render($form['field_zip_code']);
print render($form['field_profile_interests']);
print render($form['field_profile_favourites']);
print drupal_render_children($form);
?>