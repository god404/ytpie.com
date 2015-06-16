<?php /* Smarty version 3.1.24, created on 2015-06-16 23:29:46
         compiled from "E:/www/ytpie.com/application/views/templates/admin/admin/edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:23040558040ea0cb174_36908850%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90f3ac0103685a9ba4d2558a084fc960543e60b9' => 
    array (
      0 => 'E:/www/ytpie.com/application/views/templates/admin/admin/edit.tpl',
      1 => 1434468498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23040558040ea0cb174_36908850',
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_558040ea1228c0_46449976',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_558040ea1228c0_46449976')) {
function content_558040ea1228c0_46449976 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '23040558040ea0cb174_36908850';
echo $_smarty_tpl->getSubTemplate ("public/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<form method="post">
    <div class="input-group">
        <label>用户名</label>
        <input type="text" class="form-control" name="username" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['username'];?>
">
    </div>
    <div class="input-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
">
    </div>
    <div class="input-group">
        <label>密码</label>
        <input type="password" class="form-control" name="password">
    </div>
    <div class="input-group">
        <label>重复密码</label>
        <input type="password" class="form-control" name="passconf">
    </div>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
    <br>
    <div class="btn-group">
        <button type="submit" class="btn btn-default">提交</button>
    </div>
</form><?php }
}
?>