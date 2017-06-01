<?php
/**
 * @file
 * This is the template file for the object page for disk images
 *
 * @TODO: add documentation about file and available variables
 */
?>
<!-- Begin sites/all/themes/garland_apw/templates/solution_pack_object_templates/islandora-disk-image.tpl.php -->
<div class="islandora-disk-image-object islandora islandora-object">
  <div class="islandora-disk-image-content-wrapper islandora-object-content-wrapper clearfix">
    <?php if (isset($islandora_content)): ?>
      <div class="islandora-disk-image-content islandora-object-content">
        <?php print $islandora_content; ?>
        <?php print $description; ?>
      </div>
    <?php endif; ?>
    </div>
    <div class="islandora-disk-image-metadata islandora-object-metadata">
    <div>
      <h2><?php print t('Download'); ?></h2>
        <ul>
          <?php if (isset($islandora_disk_image)): ?>
            <li>Disk Image: <?php print $islandora_disk_image; ?>
          <?php endif; ?>
        </ul>
    </div>
    <?php print $metadata; ?>
  </div>
</div>
<!-- End sites/all/themes/garland_apw/templates/solution_pack_object_templates/islandora-disk-image.tpl.php -->