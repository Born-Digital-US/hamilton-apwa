<?php
/**
 * @file
 * Template file to style output.
 */
?>
<!-- Begin sites/all/themes/garland_apw/templates/solution_pack_object_templates/islandora-book-page.tpl.php -->
<?php
print $book_object_id ? l(t('Return to Book View'), "islandora/object/{$book_object_id}") : t('Orphaned page (no associated book)');
?>
<?php if (!empty($webform_links)) : ?>
  <?php print render($webform_links); ?>
<?php endif; ?>
<div id="islandora_object_display_wrapper" class="clearfix">
  <div class="book-page-content-wrapper islandora-object-content-wrapper clearfix">

    <?php if (isset($viewer)): ?>
      <div id="book-page-viewer">
        <?php print $viewer; ?>
      </div>
    <?php elseif (isset($object['JPG']) && islandora_datastream_access(ISLANDORA_VIEW_OBJECTS, $object['JPG'])): ?>
      <div id="book-page-image">
        <?php
        $params = array(
            'path' => url("islandora/object/{$object->id}/datastream/JPG/view"),
            'attributes' => array(),
        );
        print theme('image', $params);
        ?>
      </div>
    <?php endif; ?>

  </div>

  <?php if ($webform_target) : ?>
    <div id="apwa_inline_webform_target_wrapper">
      <?php print(render($webform_target)); ?>
    </div>
  <?php endif; ?>

</div>

<!-- @todo Add table of metadata values -->
<!-- End sites/all/themes/garland_apw/templates/solution_pack_object_templates/islandora-book-page.tpl.php -->