<?php /* Smarty version 3.1.24, created on 2015-06-17 02:52:46
         compiled from "E:/www/ytpie.com/application/views/templates/public/alert.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:324685580707e7f4ba8_89817979%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f8ebf1d32b2569872b778b3661c7e403f40f78d' => 
    array (
      0 => 'E:/www/ytpie.com/application/views/templates/public/alert.tpl',
      1 => 1434480763,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '324685580707e7f4ba8_89817979',
  'variables' => 
  array (
    'alert' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5580707e844409_00097798',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5580707e844409_00097798')) {
function content_5580707e844409_00097798 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '324685580707e7f4ba8_89817979';
if (isset($_smarty_tpl->tpl_vars['alert']->value)) {?>
<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['alert']->value['level'];?>
 alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong><?php echo $_smarty_tpl->tpl_vars['alert']->value['text'];?>
</strong>
</div>
<?php }
}
}
?>