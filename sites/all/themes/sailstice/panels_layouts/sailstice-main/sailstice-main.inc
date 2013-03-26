<?php

/**
 * implementation of hook_panels_layouts
 */
// Plugin definition
$plugin = array(
  'title' => t('Sailstice Main'),
  'category' => t('Sailstice'),
  'icon' => 'sailstice-main.png',
  'theme' => 'sailstice-main',
  'theme arguments' => array('id', 'content'),
  'css' => 'sailstice-main.css',
  'regions' => array(
    'left' => t('Left side'),
    'middle' => t('Middle column'),
    'right' => t('Right side')
  ),
);

