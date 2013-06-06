<?php
/**
 * @file
 * Template for a 2 column panel layout.
 *
 * This template provides a two column panel display layout, with
 * each column roughly equal in width. It is 5 rows high; the top
 * middle and bottom rows contain 1 column, while the second
 * and fourth rows contain 2 columns.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['top']: Content in the top row.
 *   - $content['left_above']: Content in the left column in row 2.
 *   - $content['right_above']: Content in the right column in row 2.
 *   - $content['middle']: Content in the middle row.
 *   - $content['left_below']: Content in the left column in row 4.
 *   - $content['right_below']: Content in the right column in row 4.
 *   - $content['right']: Content in the right column.
 *   - $content['bottom']: Content in the bottom row.
 */
?>

<div class="panel-home clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?> >

  <div class="row">
    <div class="panel" id="panel-hero-right">
      <?php print $content['hero_right']; ?>
    </div>

    <div class="panel" id="panel-hero">
      <?php print $content['hero']; ?>
    </div>
  </div>

  <div class="row">
    <div class="panel sub">
      <?php print $content['sub_1']; ?>
    </div>

    <div class="panel sub">
      <?php print $content['sub_2']; ?>
    </div>

    <div class="panel sub">
      <?php print $content['sub_3']; ?>
    </div>

  </div>

  <div class="row">
    <div class="panel"><?php print $content['row1']; ?></div>
  </div>

  <div class="row">
      <div class="panel"><?php print $content['row2']; ?></div>
  </div>

</div>

<script>
  (function ($) {
    jQuery('.home-hero .view-content').orbit({
      timer: true,
      advanceSpeed: 8000,
      pauseOnHover: true,
      startClockOnMouseOut: true
    });
  })(jQuery);
</script>
