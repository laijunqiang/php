<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>修改商品信息</title>
</head>
<body>
<div align="center">
    <table>
        <tr>
            <td>商品ID：</td>
            <td><input type="text" value="<?php echo ($ret["id"]); ?>" name="id" disabled="disabled"></td>
        </tr>
        <tr>
            <td>商品编号：</td>
            <td><input type="text" value="<?php echo ($ret["number"]); ?>" name="number" id="number" disabled="disabled"></td>
        </tr>
        <tr>
            <td>商品名：</td>
            <td>
                <input type="text" placeholder="请输入商品名" name="name" id="name"  value="<?php echo ($ret["name"]); ?>">
            </td>
        </tr>
        <tr align="center">
            <td colspan="2">
                <button onclick="goods.update()">修改</button>
                <button onclick="goods.back()">返回</button>
            </td>
        </tr>
    </table>
</div>
<script src="/Public/js/jquery.js"></script>
<script src="/Public/js/Admin/goods.js"></script>
<script src="/Public/js/dialog/layer.js"></script>
<script src="/Public/js/dialog.js"></script>
</body>
</html>