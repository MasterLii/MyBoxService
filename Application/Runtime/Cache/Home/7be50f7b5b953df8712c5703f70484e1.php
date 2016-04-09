<?php if (!defined('THINK_PATH')) exit();?><!-- $Id: brand_info.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>ECSHOP 管理中心 - 添加 </title>
        <meta name="robots" content="noindex, nofollow">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <link href="/BoxService/Public/Styles/general.css" rel="stylesheet" type="text/css" />
            <link href="/BoxService/Public/Styles/main.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1>
            <span class="action-span"><a href="/BoxService/index.php/Home/Index/main">主页</a></span>

            <span id="search_id" class="action-span1"> 修改密码 </span>
            <div style="clear:both"></div>
        </h1>
        <div class="main-div">
            <!-- /BoxService/index.php/home/index/changepwd:当前方法 -->
            <form method="POST" action="/BoxService/index.php/home/index/changepwd">
                <table cellspacing="1" cellpadding="3" width="100%">
                    <tr>
                        <td class="label">旧密码：</td>
                        <td>
                            <input type="password" name="oldpwd" maxlength="60" value="" />
                            <span class="require-field">*</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">新密码：</td>
                        <td>
                            <input type="password" name="newpwd" maxlength="60" value="" />
                            <span class="require-field">*</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">确认密码：</td>
                        <td>
                            <input type="password" name="newpwd2" maxlength="60" value="" />
                            <span class="require-field">*</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><br />
                            <input type="submit" class="button" value=" 确定 " />
                        </td>
                    </tr>
                </table>
            </form>
        </div>

        <div id="footer">

    </body>
</html>