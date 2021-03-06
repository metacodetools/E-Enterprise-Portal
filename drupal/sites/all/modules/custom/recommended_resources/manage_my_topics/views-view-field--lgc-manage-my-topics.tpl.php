<?php

/**
 * @file
 * This template is used to print a single field in a view.
 *
 * It is not actually used in default Views, as this is registered as a theme
 * function which has better performance. For single overrides, the template is
 * perfectly okay.
 *
 * Variables available:
 * - $view: The view object
 * - $field: The field handler object that can process the input
 * - $row: The raw SQL result that can be used
 * - $output: The processed output that will normally be used.
 *
 * When fetching output from the $row, this construct should be used:
 * $data = $row->{$field->field_alias}
 *
 * The above will guarantee that you'll always get the correct data,
 * regardless of any changes in the aliasing that might happen if
 * the view is modified.
 */
?>
<?php
  $checked = array_key_exists($row->tid, $_SESSION['user_lgc_topics']);
?>

<li class="usa-width-one-whole">
  <input
    id="manage-lgc-<?php print $row->tid ?>"
    aria-label="<?php print $output ?>"
    class="term-name-checkboxes"
    type="checkbox"
    name="<?php print $output ?>"
    value="<?php print $row->tid ?>"
    <?php
    if ($checked)
      print "checked='checked'";
    ?>
  />
  <label class="ck-button lgc-topics-of-interest"
         for="manage-lgc-<?php print $row->tid ?>"
  >
    <?php print $output ?>
  </label>
</li>

