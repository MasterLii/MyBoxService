<?php if (!defined('THINK_PATH')) exit();?><!-- $Id: brand_info.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>管理中心 - 添加 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/BoxService/Public/Styles/general.css" rel="stylesheet" type="text/css" />
<link href="/BoxService/Public/Styles/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>
    <span class="action-span"><a href="/BoxService/index.php/Home/Zhubo/lst">列表</a></span>
    <span class="action-span1"><a href="#"> 管理中心</a></span>
    <span id="search_id" class="action-span1"> - 添加 </span>
    <div style="clear:both"></div>
</h1>
<div class="main-div">
<!-- /BoxService/index.php/Home/zhubo/add:当前方法 -->
    <form method="POST" action="/BoxService/index.php/Home/zhubo/add">
        <table cellspacing="1" cellpadding="3" width="100%">
        	            <tr>
                <td class="label">主播名字：</td>
                <td>
                	                   		<input type="text" name="name" maxlength="60" value="" />
                                                        </td>
            </tr>
                        <tr>
                <td class="label">支付宝：</td>
                <td>
                	                   		<input type="text" name="zhifubao" maxlength="60" value="" />
                                                        </td>
            </tr>
                        <tr>
                <td class="label">周一/月-日/单数/收入：</td>
                <td>
                	                   		<input type="text" name="monday" maxlength="60" value="" />
                                                        </td>
            </tr>
                        <tr>
                <td class="label">周二/月-日/单数/收入：</td>
                <td>
                	                   		<input type="text" name="tuesday" maxlength="60" value="" />
                                                        </td>
            </tr>
                        <tr>
                <td class="label">周三/月-日/单数/收入：</td>
                <td>
                	                   		<input type="text" name="wednesday" maxlength="60" value="" />
                                                        </td>
            </tr>
                        <tr>
                <td class="label">周四/月-日/单数/收入：</td>
                <td>
                	                   		<input type="text" name="thursday" maxlength="60" value="" />
                                                        </td>
            </tr>
                        <tr>
                <td class="label">周五/月-日/单数/收入：</td>
                <td>
                	                   		<input type="text" name="friday" maxlength="60" value="" />
                                                        </td>
            </tr>
                        <tr>
                <td class="label">周六/月-日/单数/收入：</td>
                <td>
                	                   		<input type="text" name="saturday" maxlength="60" value="" />
                                                        </td>
            </tr>
                        <tr>
                <td class="label">周日/月-日/单数/收入：</td>
                <td>
                	                   		<input type="text" name="sunday" maxlength="60" value="" />
                                                        </td>
            </tr>
                        <tr>
                <td colspan="2" align="center"><br />
                    <input type="submit" class="button" value=" 确定 " />
                    <input type="reset" class="button" value=" 重置 " />
                </td>
            </tr>
        </table>
    </form>
</div>

<div id="footer">
共执行 1 个查询，用时 0.018952 秒，Gzip 已禁用，内存占用 2.197 MB<br />
版权所有 &copy; 2005-2012 上海商派网络科技有限公司，并保留所有权利。</div>
</body>
</html>