<?php /* Smarty version 3.1.24, created on 2015-06-16 20:55:36
         compiled from "E:/www/ytpie.com/application/views/templates/admin/public/sidebar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1053055801cc8d8af95_28971470%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd98cabdfcc839e9ab25c94b09888ddc73d503499' => 
    array (
      0 => 'E:/www/ytpie.com/application/views/templates/admin/public/sidebar.tpl',
      1 => 1434459333,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1053055801cc8d8af95_28971470',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55801cc8dcc074_58875110',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55801cc8dcc074_58875110')) {
function content_55801cc8dcc074_58875110 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1053055801cc8d8af95_28971470';
?>
<ul class="nav nav-sidebar">
    <li class="active"><a href="item/">商品管理</a></li>
    <li><a href="cat/">类目管理</a></li>
</ul>
<ul class="nav nav-sidebar">
    <li><a href="setting/">网站设置</a></li>
    <li><a href="admin/">管理设置</a></li>
</ul>
<?php }
}
?>