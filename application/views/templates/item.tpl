<!DOCTYPE html>
<html lang="zh-CN">
<head>
{include file="public/head.tpl"}
</head>
<body>
<div class="container">
{include file="public/header.tpl"}
    <ol class="breadcrumb">
        <li><a href="/">樱桃派</a></li>
        <li><a href="/{$cat_url}">{$cat_name}</a></li>
        <li class="active"><a href="/item/{$item.id}">{$item.title}</a></li>
    </ol>
    <div class="row">
        <div class="col-sm-6 col-md-4 thumbnail"><img src="{$item.image}"></div>
        <div class="col-sm-6 col-md-4">
            <h3>{$item.shipping}{$item.title}</h3>
            <p>￥{$item.price}</p>
            <p>原价{$item.cost_price} {$item.coupon_rate}折</p>
            <p><a isconvert="1" href="{$item.tb_url}" class="btn btn-primary" role="button" rel="nofollow" target="_blank" onclick="sclick({$item.id})">{$item.shop_name}</a></p>
        </div>
        <div class="col-sm-6 col-md-4">

        </div>
    </div>


{include file="public/footer.tpl"}
</div>
</body>
</html>
