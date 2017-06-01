<?php

/**
 * @file
 * This is the template file for the object page for video
 *
 * Available variables:
 * - $islandora_content: The rendered output of the viewer configured for
 *   this module.
 * - $islandora_dublin_core: The DC datastream object
 * - $dc_array: The DC datastream object values as a sanitized array. This
 *   includes label, value and class name.
 * - $islandora_object_label: The sanitized object label.
 * - $parent_collections: An array containing parent collection(s) info.
 *   Includes collection object, label, url and rendered link.
 *
 * @see template_preprocess_islandora_video()
 * @see theme_islandora_video()
 */
?>
<!-- Begin sites/all/themes/garland_apw/templates/solution_pack_object_templates/islandora-video.tpl.php -->
<div class="islandora-video-object islandora islandora-object" vocab="http://schema.org/" prefix="dcterms: http://purl.org/dc/terms/" typeof="VideoObject">
    <?php include path_to_theme('garland_apw') . '/templates/solution_pack_object_templates/islandora-generic-object.tpl.php'; ?>
</div>
<!-- End sites/all/themes/garland_apw/templates/solution_pack_object_templates/islandora-video.tpl.php -->