<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台登陆页面</title>
</head>
<body>
<div align="center">
    <form method="post" action="/Admin/Login/check">
        <h1>后台登陆页面</h1>
        <label>用户名：</label>
        <input type="text" name="username" placeholder="请输入账号"><br>
        <label>密码  ：</label>
        <input type="password" name="password" placeholder="请输入密码"><br>
        <input type="submit" name="登陆">
    </form>
</div>
<script src="/Public/js/jquery.js"></script>
<script src="/Public/js/dialog/layer.js"></script>
<script src="/Public/js/dialog.js"></script>
<script>
    dialog.error("登录失败");
</script>
</body>
</html>