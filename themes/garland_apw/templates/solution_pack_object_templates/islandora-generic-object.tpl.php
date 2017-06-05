<?php

/**
 * @file
 * This is the template file for generic object pages
 *
 *
 */
?>
<!-- Begin sites/all/themes/garland_apw/templates/solution_pack_object_templates/islandora-generic-object.tpl.php -->
<?php if(!empty($webform_links)) : ?>
  <?php print render($webform_links); ?>
<?php endif; ?>
<div id="islandora_object_display_wrapper" class="clearfix">
    <div class="<?php if(!empty($cmodel_class_prefix)): print $cmodel_class_prefix; endif; ?>-content-wrapper islandora-object-content-wrapper clearfix">
        <?php if (!empty($islandora_content) || !empty($description) || !empty($compound_object_navigation)): ?>
            <div class="<?php if(!empty($cmodel_class_prefix)): print $cmodel_class_prefix; endif; ?>-content islandora-object-content">
              <?php if (!empty($islandora_content)): ?>
                <?php print $islandora_content; ?>
              <?php endif; ?>
              <?php if (!empty($description)) : ?>
                <?php print $description; ?>
              <?php endif; ?>
              <?php if(!empty($compound_object_navigation)): ?>
                  <?php print render($compound_object_navigation); ?>
              <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
  <?php if($webform_target) : ?>
  <div id="apwa_inline_webform_target_wrapper">
    <?php print(render($webform_target)); ?>
  </div>
  <?php endif; ?>

</div>
<?php if($parent_collections): ?>
  <div>
    <h2><?php print t('In collections'); ?></h2>
    <ul>
      <?php foreach ($parent_collections as $collection): ?>
        <li><?php print l($collection->label, "islandora/object/{$collection->id}"); ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
<?php endif; ?>
<?php if (!empty($metadata)): ?>
  <?php print render($metadata); ?>
<?php endif; ?>
<!-- End sites/all/themes/garland_apw/templates/solution_pack_object_templates/islandora-generic-object.tpl.php -->
