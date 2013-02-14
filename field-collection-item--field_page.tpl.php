<?php

/**
 * @file
 * Theme implementation for field_page field collection items.
 */
?>
<div class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="content"<?php print $content_attributes; ?>>
    <?php
      print render($content['field_page_image']);
    ?>
    <div class="caption <?php if (($content['field_page_visibility']['#items'][0]['value']) == 0) { echo 'element-invisible'; } ?>">
      <?php print render($content['field_page_caption']); ?>
    </div>
  </div>
</div>
