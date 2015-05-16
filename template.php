<?php
/**
 * @file
 * template.php
 */
function afbootstrap_preprocess_image_style(&$vars) {
        $vars['attributes']['class'][] = 'img-thumbnail'; // can be 'img-rounded', 'img-circle', or 'img-thumbnail'
}