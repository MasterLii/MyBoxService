<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>ECSHOP 管理中心 - 列表 </title>
        <meta name="robots" content="noindex, nofollow">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <link href="/BoxService/Public/Styles/general.css" rel="stylesheet" type="text/css" />
            <link href="/BoxService/Public/Styles/main.css" rel="stylesheet" type="text/css" />
            <script language="javascript" src="/BoxService/Public/Js/jquery-1.4.2.min.js"></script>
    </head>
    <body>
        <h1>
            <span class="action-span"><a href="/BoxService/index.php/Home/Admin/add">添加</a></span>
            <span class="action-span1"><a href="#">代理商</a></span>
            <span id="search_id" class="action-span1"> - 列表 </span>
            <div style="clear:both"></div>
        </h1>
        <form method="post" action="/BoxService/index.php/Home/Admin/bdel" name="listForm">
            <div class="list-div" id="listDiv">
                <table cellpadding="3" cellspacing="1">
                    <tr>
                        <th>id</th>
                        <th>用户名</th>
                        <th>权限</th>
                        <th>余额</th>
                        <th>卖出个数</th>
                        <th>卖出总值</th>
                        <th>折扣</th>
                        <th>状态</th>
                        <th>操作</th>
                    </tr>
                    <?php foreach ($data as $k => $v): ?>            <tr>

                        <td align="center"><?php echo $v['id']; ?></td>
                        <td align="center"><?php echo $v['username']; ?></td>
                        <td align="center">
                            <?php  if($v['action']==1) { echo '管理员'; } else if($v['action']==2) { echo "主播"; } else{ echo "代理商"; } ?>

                        </td>
                        <td align="center"><?php echo $v['money']; ?></td>
                        <td align="center"><?php echo $v['sellcount']; ?></td>
                        <td align="center"><?php echo $v['sellmoney']; ?></td>
                        <td align="center"><?php echo $v['discount']; ?></td>
                        <td align="center">
                            <?php  if($v['status']==1) { echo '正常'; } else { echo "<span style='color:red'>封禁</span>"; } ?>
                        </td>
                        <td align="center">
                            <a href="/BoxService/index.php/Home/Admin/edit/id/<?php echo $v['id']; ?>" title="编辑">管理</a>
                            <a href="/BoxService/index.php/Home/Admin/scanpwd/id/<?php echo $v['id']; ?>" title="编辑">详情</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>            <tr>
                        <td align="right" nowrap="true" colspan="10">
                            <div id="turn-page">
                                <?php echo $page; ?>                    </div>
                        </td>
                    </tr>
                </table>
            </div>
        </form>

        <div id="footer">

    </body>
</html>