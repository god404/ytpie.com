<?php /* Smarty version 3.1.24, created on 2015-06-16 16:34:02
         compiled from "E:/www/ytpie.com/application/views/templates/admin/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18036557fdf7a7ef557_52142271%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32539d5048509be8bd28872458de326979498576' => 
    array (
      0 => 'E:/www/ytpie.com/application/views/templates/admin/login.tpl',
      1 => 1434431891,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18036557fdf7a7ef557_52142271',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_557fdf7a842d04_23239311',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_557fdf7a842d04_23239311')) {
function content_557fdf7a842d04_23239311 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18036557fdf7a7ef557_52142271';
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<?php echo $_smarty_tpl->getSubTemplate ("admin/public/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<link href="/static/css/signin.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <form class="form-signin" method="post" action="">
        <h2 class="form-signin-heading">樱桃派管理系统</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin/public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</body>
</html>
<?php }
}
?>