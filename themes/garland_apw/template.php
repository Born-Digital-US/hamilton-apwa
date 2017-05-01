<?php
function garland_one_lib_preprocess_page(&$vars) {
    // Hook into color.module
    if (module_exists('color')) {
        _color_page_alter($vars);
    }
}