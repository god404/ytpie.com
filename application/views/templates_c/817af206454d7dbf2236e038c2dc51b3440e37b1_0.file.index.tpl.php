<?php /* Smarty version 3.1.24, created on 2015-06-17 03:32:23
         compiled from "E:/www/ytpie.com/application/views/templates/admin/admin/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13766558079c75968b9_65920218%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '817af206454d7dbf2236e038c2dc51b3440e37b1' => 
    array (
      0 => 'E:/www/ytpie.com/application/views/templates/admin/admin/index.tpl',
      1 => 1434483135,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13766558079c75968b9_65920218',
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_558079c760ccf9_39887789',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_558079c760ccf9_39887789')) {
function content_558079c760ccf9_39887789 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13766558079c75968b9_65920218';
echo $_smarty_tpl->getSubTemplate ("public/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<table class="table table-bordered table-striped table-hover table-condensed">
    <caption>管理员列表</caption>
    <thead>
    <tr>
        <th>ID</th>
        <th>用户名</th>
        <th>Email</th>
        <th>编辑</th>
        <th>删除</th>
    </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->tpl_vars['items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['username'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
</td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
/edit/<?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value['id'];
$_tmp1=ob_get_clean();
echo $_tmp1;?>
">编辑</a></td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
/delete/<?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value['id'];
$_tmp2=ob_get_clean();
echo $_tmp2;?>
">删除</a></td>
        </tr>
    <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
    </tbody>
</table><?php }
}
?>