<?php /* Smarty version 3.1.24, created on 2015-06-16 13:30:40
         compiled from "E:/www/ytpie.com/application/views/templates/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:6436557fb4800ce8a2_58558179%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '473a1d69953d74c3b9ba05bf88fce054e91d4e63' => 
    array (
      0 => 'E:/www/ytpie.com/application/views/templates/welcome.tpl',
      1 => 1434431861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6436557fb4800ce8a2_58558179',
  'variables' => 
  array (
    'h2' => 0,
    'items' => 0,
    'item' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_557fb4801d9cc4_10921553',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_557fb4801d9cc4_10921553')) {
function content_557fb4801d9cc4_10921553 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6436557fb4800ce8a2_58558179';
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<?php echo $_smarty_tpl->getSubTemplate ("public/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</head>
<body>
<div class="container">
<?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="page-header">
    <h2><?php echo $_smarty_tpl->tpl_vars['h2']->value;?>
</h2>
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
            <a href="/item/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
">
            </a>
                <div class="caption">
                    <a href="/item/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                    <div>￥<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
￥<?php echo $_smarty_tpl->tpl_vars['item']->value['cost_price'];?>
(<?php echo $_smarty_tpl->tpl_vars['item']->value['coupon_rate'];?>
折)<div class="pull-right"><a  isconvert="1" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['tb_url'];?>
" class="btn btn-primary" role="button" rel="nofollow"  target="_blank"  onclick="sclick(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
)"><?php echo $_smarty_tpl->tpl_vars['item']->value['shop_name'];?>
</a></div></div>
                </div>
        </div>
    </div>
<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
</div>
 <?php echo $_smarty_tpl->tpl_vars['pages']->value;?>

<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</div>
</body>
</html>
<?php }
}
?>