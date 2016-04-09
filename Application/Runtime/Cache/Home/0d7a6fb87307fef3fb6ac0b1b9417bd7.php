<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>ECSHOP 管理中心 - 列表 </title>
        <meta name="robots" content="noindex, nofollow">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <link href="/MyBoxService/Public/Styles/general.css" rel="stylesheet" type="text/css" />
            <link href="/MyBoxService/Public/Styles/main.css" rel="stylesheet" type="text/css" />
            <script language="javascript" src="/MyBoxService/Public/Js/jquery-1.4.2.min.js"></script>
    </head>
    <body>
        <h1>
            <span class="action-span"><a href="/MyBoxService/index.php/Home/User/add">添加</a></span>
            <span class="action-span1"><a href="#">ECSHOP 管理中心</a></span>
            <span id="search_id" class="action-span1"> - 列表 </span>
            <div style="clear:both"></div>
        </h1>
        <div class="form-div">
            <form action="/MyBoxService/index.php/Home/User/lst" name="searchForm">
                <img src="/MyBoxService/Public/Images/icon_search.gif" width="26" height="22" border="0" alt="search" />
                <input type="text" name="search" size="15" value="<?php echo I('get.search'); ?>"/>
                <input type="submit" value=" 搜索 " class="button" />
            </form>
        </div>

        <form method="post" action="/MyBoxService/index.php/Home/User/bdel" name="listForm">
            <div class="list-div" id="listDiv">
                <table cellpadding="3" cellspacing="1">
                    <tr>

                        <th>ID</th>
                        <th>用户名</th>
                        <th>最后登录时间</th>
                        <th>登录次数</th>
                        <th>机器码</th>
                        <th>到期时间</th>
                        <th>状态</th>
                        <th>安全邮箱</th>
                        <th>操作</th>
                    </tr>
                    <?php foreach ($data as $k => $v): ?>            
                    <tr>

                        <td align="center"><?php echo $v['id']; ?></td>
                        <td align="center"><?php echo $v['username']; ?></td>
                        <td align="center"><?php echo $v['lastlogin']; ?></td>
                        <td align="center"><?php echo $v['logintime']; ?></td>
                        <td align="center"><?php echo $v['mcode']; ?></td>
                        <td align="center"><?php echo $v['expiretime']; ?></td>

                        <td align="center">
                            <?php  if($v['status']==1) { echo '正常'; $flags='封禁'; } else { echo "<span style='color:red'>封禁</span>"; $flags='解封'; } ?>
                        </td>
                        <td align="center"><?php echo $v['email']; ?></td>
                        <td align="center">

                            <a onclick="return confirm('确定要<?php echo $flags; ?>该用户吗吗？');" href="/MyBoxService/index.php/Home/User/change/id/<?php echo $v['id']; ?>" title="编辑"><?php echo $flags; ?>用户</a>

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


        </div>
    </body>
</html>
<script>
    $("#selall").click(function () {
        if ($(this).attr("checked"))
            $(".selall").attr("checked", "checked");   // 设置所有的都选中
        else
            $(".selall").removeAttr("checked");       // 设置都不选中
    });
</script>