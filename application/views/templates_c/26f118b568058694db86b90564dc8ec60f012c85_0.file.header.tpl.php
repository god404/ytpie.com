<?php /* Smarty version 3.1.24, created on 2015-06-16 16:54:37
         compiled from "E:/www/ytpie.com/application/views/templates/admin/public/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14795557fe44d55f719_05357315%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26f118b568058694db86b90564dc8ec60f012c85' => 
    array (
      0 => 'E:/www/ytpie.com/application/views/templates/admin/public/header.tpl',
      1 => 1434444871,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14795557fe44d55f719_05357315',
  'variables' => 
  array (
    'admin_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_557fe44d59ca91_50948820',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_557fe44d59ca91_50948820')) {
function content_557fe44d59ca91_50948820 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14795557fe44d55f719_05357315';
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/admin">樱桃派</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['admin_name']->value;?>
</a></li>
                <li><a href="/admin/logout">退出</a></li>
            </ul>
            <form class="navbar-form navbar-right">
                <input type="text" class="form-control" placeholder="Search...">
            </form>
        </div>
    </div>
</nav><?php }
}
?>