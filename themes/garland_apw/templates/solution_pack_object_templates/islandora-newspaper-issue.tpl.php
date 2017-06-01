<?php

/**
 * @file
 */
?>
<!-- Begin sites/all/themes/garland_apw/templates/solution_pack_object_templates/islandora-newspaper-issue.tpl.php -->
<div class="islandora-newspaper-issue clearfix islandora-object">
  <span class="islandora-newspaper-issue-navigator">
    <?php print theme('islandora_newspaper_issue_navigator', array('object' => $object)); ?>
  </span>
  <?php if (isset($viewer_id) && $viewer_id != "none"): ?>
    <div id="book-viewer">
      <?php print $viewer; ?>
      <?php print $description; ?>
    </div>
  <?php else: ?>
    <?php print theme('islandora_objects', array('objects' => $pages)); ?>
  <?php endif; ?>
  <div class="islandora-newspaper-issue-metadata islandora-object-metadata">
    <?php print $metadata; ?>
  </div>
</div>
<!-- End sites/all/themes/garland_apw/templates/solution_pack_object_templates/islandora-newspaper-issue.tpl.php -->