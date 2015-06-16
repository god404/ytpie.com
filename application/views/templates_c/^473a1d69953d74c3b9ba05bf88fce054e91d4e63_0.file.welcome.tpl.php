<?php /* Smarty version 3.1.24, created on 2015-06-13 00:52:43
         compiled from "E:/www/ytpie.com/application/views/templates/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:21064557b0e5bee0227_61817152%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '473a1d69953d74c3b9ba05bf88fce054e91d4e63' => 
    array (
      0 => 'E:/www/ytpie.com/application/views/templates/welcome.tpl',
      1 => 1434125145,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21064557b0e5bee0227_61817152',
  'variables' => 
  array (
    'nav' => 0,
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_557b0e5c06f065_06008500',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_557b0e5c06f065_06008500')) {
function content_557b0e5c06f065_06008500 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21064557b0e5bee0227_61817152';
?>
<!DOCTYPE html>
<html lang="zh-CN">
<?php echo $_smarty_tpl->getSubTemplate ("public/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body  role="document">
<div class="container">
<?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="page-header">
    <h1>每日上新<?php echo $_smarty_tpl->tpl_vars['nav']->value;?>
</h1>
</div>
<div class="row">
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
    <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
            <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['tb_url'];?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" />
            </a>
                <div class="caption">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['tb_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>

                    <p><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['tb_url'];?>
" class="btn btn-primary" role="button">Button</a> <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['tb_url'];?>
" class="btn btn-default" role="button">Button</a></p>
                </div>
        </div>
    </div>
<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</div>
</body>
</html>
<?php }
}
?>