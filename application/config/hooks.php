<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$hook['pre_system'] = array(
    'class'    => '',
    'function' => 'cron',
    'filename' => 'Cron.php',
    'filepath' => 'hooks',
    'params'   => array()
);
/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/hooks.html
|
*/
