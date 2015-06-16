<!DOCTYPE html>
<html lang="zh-CN">
<head>
{include file="admin/public/head.tpl"}
<link href="/static/css/dashboard.css" rel="stylesheet">
</head>
<body>
<div class="container">
{include file="admin/public/header.tpl"}
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
        {include file="admin/public/sidebar.tpl"}
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h3>Example heading <span class="label label-default">New</span></h3>
        {include file="admin/{$c}/{$f}.tpl"}
        </div>
    </div>
</div>
{include file="admin/public/footer.tpl"}
</div>
</body>
</html>
