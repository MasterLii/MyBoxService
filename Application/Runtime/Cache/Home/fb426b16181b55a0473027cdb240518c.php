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
            <span class="action-span"><a href="/BoxService/index.php/Home/Category/add">添加</a></span>
            <span class="action-span1"><a href="#">ECSHOP 管理中心</a></span>
            <span id="search_id" class="action-span1"> - 列表 </span>
            <div style="clear:both"></div>
        </h1>
        <form method="post" action="/BoxService/index.php/Home/Category/bdel" name="listForm">
            <div class="list-div" id="listDiv">
                <table cellpadding="3" cellspacing="1">
                    <tr>

                        <th>id</th>
                        <th>分类名称</th>
                        <th>操作</th>
                    </tr>
                    <?php foreach ($data as $k => $v): ?>            
                    <tr>
                        <td align="center"><?php echo $v['id']; ?></td>
                        <td align="center"><?php echo $v['name']; ?></td>
                        <td align="center">
                            <a href="/BoxService/index.php/Home/Category/edit/id/<?php echo $v['id']; ?>" title="编辑">编辑</a>
                            <a onclick="return confirm('确定要删除吗？');" href="/BoxService/index.php/Home/Category/delete/id/<?php echo $v['id']; ?>" title="编辑">移除</a> 
                        </td>
                    </tr>
                    <?php endforeach; ?>            <tr>
                        <td align="right" nowrap="true" colspan="3">
                            <div id="turn-page">
                                <?php echo $page; ?>                    </div>
                        </td>
                    </tr>
                </table>
            </div>
        </form>

        <div id="footer">
        </div>
    </body>
</html>