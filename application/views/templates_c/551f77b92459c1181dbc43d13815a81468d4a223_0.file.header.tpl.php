<?php /* Smarty version 3.1.24, created on 2015-06-17 03:48:21
         compiled from "E:/www/ytpie.com/application/views/templates/public/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:964055807d85060812_95572049%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '551f77b92459c1181dbc43d13815a81468d4a223' => 
    array (
      0 => 'E:/www/ytpie.com/application/views/templates/public/header.tpl',
      1 => 1434483804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '964055807d85060812_95572049',
  'variables' => 
  array (
    'navs' => 0,
    'nav' => 0,
    'cat_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55807d850bbd34_66049621',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55807d850bbd34_66049621')) {
function content_55807d850bbd34_66049621 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '964055807d85060812_95572049';
?>
<div class="page-header">
    <h1>樱桃派<small>什么值得买</small></h1>
</div>
<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">最新折扣</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <?php
$_from = $_smarty_tpl->tpl_vars['navs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['nav']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
$foreach_nav_Sav = $_smarty_tpl->tpl_vars['nav'];
?>
                <li<?php if ($_smarty_tpl->tpl_vars['nav']->value['cat_url'] == $_smarty_tpl->tpl_vars['cat_url']->value) {?> class="active"<?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['nav']->value['cat_url'];?>
/"><?php echo $_smarty_tpl->tpl_vars['nav']->value['cat_name'];?>
</a></li>
                <?php
$_smarty_tpl->tpl_vars['nav'] = $foreach_nav_Sav;
}
?>
            </ul>
        </div>
    </div>
</nav><?php }
}
?>