<?php
// -----
// Part of the "Clone Template" plugin for Zen Cart v1.5.0 and later.
//
// Copyright (c) 2016, Vinos de Frutas Tropicales (lat9)
//
if (!defined('IS_ADMIN_FLAG')) {
  die('Illegal Access');
} 

$autoLoadConfig[200][] = array(
    'autoType'  => 'init_script',
    'loadFile'  => 'init_clone_template.php');