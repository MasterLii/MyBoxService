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
            <span class="action-span"><a href="/BoxService/index.php/Home/Admin/lst">列表</a></span>
            <span class="action-span1"><a href="#">代理商</a></span>
            <span id="search_id" class="action-span1"> - 修改 </span>
            <div style="clear:both"></div>
        </h1>
        <div class="main-div">
            <!-- /BoxService/index.php/Home/Admin/edit/id/8:当前方法 -->
            <form method="POST" action="/BoxService/index.php/Home/Admin/edit/id/8">
                <table cellspacing="1" cellpadding="3" width="100%">
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />            <tr>
                        <td class="label">用户名：</td>
                        <td>
                            <input type="text" name="username" maxlength="60" value="<?php echo $data['username']; ?>" />
                        </td>
                    </tr>


                    <tr>
                        <td class="label">余额：</td>
                        <td>
                            <input type="text" name="money" maxlength="60" value="<?php echo $data['money']; ?>" />
                        </td>
                    </tr>


                    <tr>
                        <td class="label">折扣：</td>
                        <td>
                            <input type="text" name="discount" maxlength="60" value="<?php echo $data['discount']; ?>" />
                            <span class="require-field">* 1~10</span>
                        </td>
                        
                    </tr>
                    <tr>
                        <td class="label">状态：</td>
                        <td>
                            <?php if($data['status']==1):?>
                             <input type="radio" name="status" value="1" checked/> 正常
                             <input type="radio" name="status" value="0" /> 封禁
                              <?php else: ?>
                              <input type="radio" name="status" value="1" /> 正常
                             <input type="radio" name="status" value="0" checked/> 封禁
                             <?php endif ?>
                            
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

        </div>
    </body>
</html>