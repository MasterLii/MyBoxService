<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>
    <head>
        <title>注册</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/MyBoxService/Public/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    </head>
    <body style="background-color: #EDEDED;">

            <form method="post" action="/MyBoxService/index.php/home/ser//register" class="form-horizontal" style="text-align:center;margin:0 auto;margin-top:30px;">
                <table style="text-align:center;margin:0 auto;">
                    <tr><td>用户名</td><td><input type="text" name="username" /></td></tr>
                    <tr><td>密码</td><td><input type="password" name="password"/></td></tr>
                    <tr><td>确认密码</td><td><input type="password" name="password1"/></td></tr>
                    <tr><td>安全邮箱</td><td><input type="text" name="email"/></td></tr>
                    <tr><td>验证码</td><td><input type="text" name="code"/></td></tr>
                    <tr><td><input class="btn" type="submit" value="确认" style="border:1px solid #1B1B1B;"/></td><td><img onclick="this.src='/MyBoxService/index.php/Home/Ser/codeImg/'+Math.random();" style="cursor:pointer;" src="/MyBoxService/index.php/Home/Ser/codeImg" /></td></tr>
                </table>



            </form>

    </body>
</html>