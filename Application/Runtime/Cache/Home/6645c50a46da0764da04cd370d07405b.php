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
            <!-- /BoxService/index.php/Home/Admin/scanpwd/id/6:当前方法 -->

                <table cellspacing="1" cellpadding="3" width="100%">
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />            <tr>
                        <td class="label">用户名：</td>
                        <td>
                            <?php echo $data['username']; ?>
                        </td>
                    </tr>


                    <tr>
                        <td class="label">密码：</td>
                        <td>
                            <?php echo $data['password']; ?>
                         </td>
                    </tr>
                    <tr>
                        <td class="label">权限：</td>
                        <td>
                             <?php if($data['action']==1):?>
                                管理员
                            <?php else: ?>
                                代理商
                            <?php endif ?>
                        </td>

                    </tr>
                    
                    <tr>
                        <td class="label">折扣：</td>
                        <td>
                            <?php echo $data['discount']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">余额：</td>
                        <td>
                            <?php echo $data['money']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">卖出个数：</td>
                        <td>
                            <?php echo $data['sellcount']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">卖出总值：</td>
                        <td>
                            <?php echo $data['sellmoney']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">状态：</td>
                        <td>
                            <?php if($data['status']==1):?>
                                正常
                            <?php else: ?>
                                封禁
                            <?php endif ?>

                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><br />


                        </td>
                    </tr>
                </table>
        </div>

        <div id="footer">

        </div>
    </body>
</html>