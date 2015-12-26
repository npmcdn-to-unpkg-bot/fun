<?php
/**
 * @file
 * Template for a 3 column panel layout.
 *
 * This template provides a very simple "one column" panel display layout.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   $content['middle']: The only panel in the layout.
 */
?>
<div class="wide" <?php !empty($css_id) ? print 'id="' . $css_id . '"' : ''; ?>>
  <?php print $content['top']; ?>
</div>
<div class="row">
  <div class="medium-8 columns">
    <?php print $content['middle_1']; ?>
  </div>
  <div class="medium-4 columns">
    <?php print $content['middle_2']; ?>
  </div>
</div>
<div class="row">
  <div class="medium-8 columns">
    <?php print $content['bottom_1']; ?>
  </div>
  <div class="medium-4 columns">
    <?php print $content['bottom_2']; ?>
  </div>
</div>