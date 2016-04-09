<?php if (!defined('THINK_PATH')) exit();?><!-- $Id: brand_info.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 修改 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/BoxService/Public/Styles/general.css" rel="stylesheet" type="text/css" />
<link href="/BoxService/Public/Styles/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>
    <span class="action-span"><a href="/BoxService/index.php/Home/Card/lst">列表</a></span>
    <span class="action-span1"><a href="#">ECSHOP 管理中心</a></span>
    <span id="search_id" class="action-span1"> - 修改 </span>
    <div style="clear:both"></div>
</h1>
<div class="main-div">
<!-- /BoxService/index.php/Home/Card/edit/id/75:当前方法 -->
    <form method="POST" action="/BoxService/index.php/Home/Card/edit/id/75">
        <table cellspacing="1" cellpadding="3" width="100%">
        	<input type="hidden" name="id" value="<?php echo $data['id']; ?>" />            <tr>
                <td class="label">充值卡号：</td>
                <td>
                	<input type="text" name="code" maxlength="60" value="<?php echo $data['code']; ?>" />
                                                        </td>
            </tr>
                        <tr>
                <td class="label">充值时间：</td>
                <td>
                	<input type="text" name="valuetime" maxlength="60" value="<?php echo $data['valuetime']; ?>" />
                                                        </td>
            </tr>
                        <tr>
                <td class="label">创建时间：</td>
                <td>
                	<input type="text" name="createtime" maxlength="60" value="<?php echo $data['createtime']; ?>" />
                                                        </td>
            </tr>
                        <tr>
                <td class="label">使用时间：</td>
                <td>
                	<input type="text" name="usetime" maxlength="60" value="<?php echo $data['usetime']; ?>" />
                                                        </td>
            </tr>
                        <tr>
                <td class="label">使用者：</td>
                <td>
                	<input type="text" name="userid" maxlength="60" value="<?php echo $data['userid']; ?>" />
                                                        </td>
            </tr>
                        <tr>
                <td class="label">创建者：</td>
                <td>
                	<input type="text" name="createrid" maxlength="60" value="<?php echo $data['createrid']; ?>" />
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