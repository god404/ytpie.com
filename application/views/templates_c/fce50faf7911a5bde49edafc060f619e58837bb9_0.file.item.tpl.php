<?php /* Smarty version 3.1.24, created on 2015-06-16 15:52:24
         compiled from "E:/www/ytpie.com/application/views/templates/item.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:225557fd5b86f3be2_80129404%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fce50faf7911a5bde49edafc060f619e58837bb9' => 
    array (
      0 => 'E:/www/ytpie.com/application/views/templates/item.tpl',
      1 => 1434431851,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '225557fd5b86f3be2_80129404',
  'variables' => 
  array (
    'cat_url' => 0,
    'cat_name' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_557fd5b8770148_59086038',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_557fd5b8770148_59086038')) {
function content_557fd5b8770148_59086038 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '225557fd5b86f3be2_80129404';
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

    <ol class="breadcrumb">
        <li><a href="/">樱桃派</a></li>
        <li><a href="/<?php echo $_smarty_tpl->tpl_vars['cat_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['cat_name']->value;?>
</a></li>
        <li class="active"><a href="/item/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></li>
    </ol>
    <div class="row">
        <div class="col-sm-6 col-md-4 thumbnail"><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
"></div>
        <div class="col-sm-6 col-md-4">
            <h3><?php echo $_smarty_tpl->tpl_vars['item']->value['shipping'];
echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h3>
            <p>￥<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</p>
            <p>原价<?php echo $_smarty_tpl->tpl_vars['item']->value['cost_price'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['coupon_rate'];?>
折</p>
            <p><a isconvert="1" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['tb_url'];?>
" class="btn btn-primary" role="button" rel="nofollow" target="_blank" onclick="sclick(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
)"><?php echo $_smarty_tpl->tpl_vars['item']->value['shop_name'];?>
</a></p>
        </div>
        <div class="col-sm-6 col-md-4">

        </div>
    </div>


<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</div>
</body>
</html>
<?php }
}
?>