<?php /* Smarty version 3.1.24, created on 2015-06-16 21:08:30
         compiled from "E:/www/ytpie.com/application/views/templates/admin/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1400955801fce3298c0_30902220%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddb89e186c31453607037becd8cf2694c0428de8' => 
    array (
      0 => 'E:/www/ytpie.com/application/views/templates/admin/welcome.tpl',
      1 => 1434460098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1400955801fce3298c0_30902220',
  'variables' => 
  array (
    'c' => 0,
    'f' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55801fce3e3c94_42988177',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55801fce3e3c94_42988177')) {
function content_55801fce3e3c94_42988177 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1400955801fce3298c0_30902220';
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<?php echo $_smarty_tpl->getSubTemplate ("admin/public/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<link href="/static/css/dashboard.css" rel="stylesheet">
</head>
<body>
<div class="container">
<?php echo $_smarty_tpl->getSubTemplate ("admin/public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
        <?php echo $_smarty_tpl->getSubTemplate ("admin/public/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h3>Example heading <span class="label label-default">New</span></h3>
        <?php echo $_smarty_tpl->getSubTemplate ("admin/".((string)$_smarty_tpl->tpl_vars['c']->value)."/".((string)$_smarty_tpl->tpl_vars['f']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin/public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</div>
</body>
</html>
<?php }
}
?>