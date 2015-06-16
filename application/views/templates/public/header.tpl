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
                {foreach from=$navs item=nav}
                <li{if $nav.cat_url eq $cat_url} class="active"{/if}><a href="/{$nav.cat_url}/">{$nav.cat_name}</a></li>
                {/foreach}
            </ul>
        </div>
    </div>
</nav>