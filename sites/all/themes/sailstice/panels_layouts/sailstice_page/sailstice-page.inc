<?php

/**
 * implementation of hook_panels_layouts
 */
// Plugin definition
$plugin = array(
  'title' => t('Sailstice Page'),
  'category' => t('Sailstice'),
  'icon' => 'sailstice-page.png',
  'theme' => 'sailstice-page',
  'theme arguments' => array('id', 'content'),
  'css' => 'sailstice-page.css',
  'regions' => array(
    'main' => t('Main'),
    'sidebar' => t('Sidebar')
  ),
);

