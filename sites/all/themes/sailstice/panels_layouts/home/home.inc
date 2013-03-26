<?php

/**
 * @file
 * Implementation for the two column bricked layout
 */

// Plugin definition
$plugin = array(
  'title' => t('Home'),
  'category' => t('Sailstice'),
  'icon' => 'home.png',
  'theme' => 'home',
  'css' => 'home.css',
  'regions' => array(
    'hero' => t('Hero'),
    'hero_right' => t('Hero Right'),
    'sub_1' => t('Sub Hero 1'),
    'sub_2' => t('Sub Hero 2'),
    'sub_3' => t('Sub Hero 3'),
    'row1' => t('Row 1'),
    'row2' => t('Row 2'),
  ),
);

