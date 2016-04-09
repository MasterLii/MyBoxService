<?php if (!defined('THINK_PATH')) exit();?><!-- $Id: brand_info.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>ECSHOP 管理中心 - 添加 </title>
        <meta name="robots" content="noindex, nofollow">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <link href="/MyBoxService/Public/Styles/general.css" rel="stylesheet" type="text/css" />
            <link href="/MyBoxService/Public/Styles/main.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1>
            <span class="action-span"><a href="/MyBoxService/index.php/Home/Card/lst">列表</a></span>
            <span class="action-span1"><a href="#">卡密</a></span>
            <span id="search_id" class="action-span1"> - 添加 </span>
            <div style="clear:both"></div>
        </h1>
        <div class="main-div">
            <!-- /MyBoxService/index.php/Home/Card/add:当前方法 -->
            <form method="POST" action="/MyBoxService/index.php/Home/Card/add">
                <table cellspacing="1" cellpadding="3" width="100%">
                   <tr>
                        <td class="label">游戏种类：</td>
                        <td>
                            
                            <select name="gameid">  
                                <option value ="1">坦克世界</option>  
                                <option value ="2">战舰世界</option>  
                                <option value="3">战机世界</option>  
                            </select>  
                            
                            <span class="require-field">*</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">制卡数量：</td>
                        <td>
                            <input type="text" name="count" maxlength="60" value="" />
                            <span class="require-field">*</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">卡号前缀：</td>
                        <td>
                            <input type="text" name="prefix" maxlength="60" value="" />
                            <span class="require-field">* 1-5位英文或数字</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">充值时间：</td>
                        <td>
                            
                            <select name="valuetime">  
                                <option value ="1">1天卡</option>  
                                <option value ="3">3天卡</option>  
                                <option value="7">7天卡</option>  
                                <option value="30" selected="selected">30天 月卡</option>
                                <option value="180">180天 半年卡</option>  
                                <option value="365">365天 年卡</option>
                            </select>  
                            
                            <span class="require-field">*</span>
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
        </div>
    </body>
</html>