<!DOCTYPE html>
<html lang="zh-CN">
<head>
{include file="public/head.tpl"}
</head>
<body>
<div class="container">
{include file="public/header.tpl"}
<div class="page-header">
    <h2>{$h2}</h2>
</div>
<div class="row">
{foreach from=$items item=item}
    <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
            <a href="/item/{$item.id}">
                <img src="{$item.image}" alt="{$item.title}">
            </a>
                <div class="caption">
                    <a href="/item/{$item.id}">{$item.title}</a>
                    <div>￥{$item.price}￥{$item.cost_price}({$item.coupon_rate}折)<div class="pull-right"><a  isconvert="1" href="{$item.tb_url}" class="btn btn-primary" role="button" rel="nofollow"  target="_blank"  onclick="sclick({$item.id})">{$item.shop_name}</a></div></div>
                </div>
        </div>
    </div>
{/foreach}
</div>
 {$pages}
{include file="public/footer.tpl"}
</div>
</body>
</html>
