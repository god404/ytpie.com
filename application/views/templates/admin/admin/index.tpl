{include file="public/alert.tpl"}
<table class="table table-bordered table-striped table-hover table-condensed">
    <caption>管理员列表</caption>
    <thead>
    <tr>
        <th>ID</th>
        <th>用户名</th>
        <th>Email</th>
        <th>编辑</th>
        <th>删除</th>
    </tr>
    </thead>
    <tbody>
    {foreach from=$items item=item}
        <tr>
            <td>{$item.id}</td>
            <td>{$item.username}</td>
            <td>{$item.email}</td>
            <td><a href="{$c}/edit/{{$item.id}}">编辑</a></td>
            <td><a href="{$c}/delete/{{$item.id}}">删除</a></td>
        </tr>
    {/foreach}
    </tbody>
</table>