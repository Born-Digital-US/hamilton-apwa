<?php

/**
 * @file
 * islandora-newspaper-page.tpl.php
 * This is the template file for the object page for newspaper
 *
 * Available variables:
 * - $object: The Islandora object rendered in this template file
 * - $islandora_content: A rendered image. By default this is the JPG datastream
 *   which is a medium sized image. Alternatively this could be a rendered
 *   viewer which displays the JP2 datastream image.
 * - $description: Rendered metadata descripton for the object.
 * - $metadata: Rendered metadata display for the binary object.
 *
 * @see template_preprocess_islandora_newspaper_page()
 * @see theme_islandora_newspaper_page()
 *
 */
?>
<!-- Begin sites/all/themes/garland_apw/templates/solution_pack_object_templates/islandora-newspaper-page.tpl.php -->
<div class="islandora-newspaper-object islandora-object">
  <div class="islandora-newspaper-controls">
    <?php print theme('islandora_newspaper_page_controls', array('object' => $object)); ?>
  </div>
  <div class="islandora-newspaper-content-wrapper islandora-object-content-wrapper clearfix">
    <?php if ($content): ?>
      <div class="islandora-newspaper-content islandora-object-content">
        <?php print $content; ?>
        <?php print $description; ?>
      </div>
    <?php endif; ?>
  </div>
  <div class="islandora-newspaper-page-metadata islandora-object-metadata">
    <?php print $metadata; ?>
  </div>
</div>
<!-- End sites/all/themes/garland_apw/templates/solution_pack_object_templates/islandora-newspaper-page.tpl.php -->