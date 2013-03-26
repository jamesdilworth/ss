<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 *
 * Overridden all the good stuff for the home page views to create a simple view ready for the carousel.  -- jaymz
 *
 */
?>

<?php
    //extract the URL of the image from the <a> tag so that we can use it as a background image.
    //forward slashes are the start and end delimeters
    //third parameter is the array we want to fill with matches
    if (preg_match('/"([^"]+)"/', $fields['field_image']->content, $m)) {

    } else {
      //preg_match returns the number of matches found,
      //so if here didn't match pattern
    }
?>

<div class="hero" style="background-image:url(<?php if(isset($m[1])) print $m[1]; ?>)">
 <?php print $fields['field_link_to']->content ?>
 <?php print $fields['body']->content ?>
</div>

