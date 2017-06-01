<?php
/**
 * @file
 * This is the template file for the object page for web archives
 *
 * @TODO: add documentation about file and available variables
 */
?>
<!-- Begin sites/all/themes/garland_apw/templates/solution_pack_object_templates/islandora-web-archive.tpl.php -->
<div class="islandora-web-archive-object islandora islandora-object">
  <div class="islandora-web-archive-content-wrapper islandora-object-content-wrapper clearfix">
    <?php if (isset($islandora_content)): ?>
      <div class="islandora-web-archive-content islandora-object-content">
        <?php print $islandora_content; ?>
        <?php print $description; ?>
      </div>
    <?php endif; ?>
    </div>
      <h2><?php print t('Download'); ?></h2>
        <ul>
          <?php if (isset($islandora_warc)): ?>
            <li>Warc: <?php print $islandora_warc; ?>
          <?php endif; ?>
          <?php if (isset($islandora_pdf)): ?>
            <li>PDF: <?php print $islandora_pdf; ?>
          <?php endif; ?>
          <?php if (isset($islandora_screenshot)): ?>
            <li>Screenshot: <?php print $islandora_screenshot; ?>
          <?php endif; ?>
          <?php if (isset($islandora_csv)): ?>
            <li>CSV: <?php print $islandora_csv; ?>
          <?php endif; ?>
        </ul>
    </div>
        <div class="<?php print $cmodel_class_prefix; ?>-metadata islandora-object-metadata">
            <?php print $metadata; ?>
        </div>
  </div>
</div>
<!-- End sites/all/themes/garland_apw/templates/solution_pack_object_templates/islandora-web-archive.tpl.php -->