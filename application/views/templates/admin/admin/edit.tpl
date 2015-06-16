{include file="public/alert.tpl"}
<form method="post">
    <div class="input-group">
        <label>用户名</label>
        <input type="text" class="form-control" name="username" value="{$item.username}">
    </div>
    <div class="input-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" value="{$item.email}">
    </div>
    <div class="input-group">
        <label>密码</label>
        <input type="password" class="form-control" name="password">
    </div>
    <div class="input-group">
        <label>重复密码</label>
        <input type="password" class="form-control" name="passconf">
    </div>
    <input type="hidden" name="id" value="{$item.id}">
    <br>
    <div class="btn-group">
        <button type="submit" class="btn btn-default">提交</button>
    </div>
</form>