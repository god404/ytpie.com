<!DOCTYPE html>
<html lang="zh-CN">
<head>
{include file="admin/public/head.tpl"}
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
{include file="admin/public/footer.tpl"}
</body>
</html>
