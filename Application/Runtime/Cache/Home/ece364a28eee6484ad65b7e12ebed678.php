<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>充值卡 - 列表 </title>
        <meta name="robots" content="noindex, nofollow">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <link href="/MyBoxService/Public/Styles/general.css" rel="stylesheet" type="text/css" />
            <link href="/MyBoxService/Public/Styles/main.css" rel="stylesheet" type="text/css" />
            <script language="javascript" src="/MyBoxService/Public/Js/jquery-1.4.2.min.js"></script>
            <script language="javascript" src="/MyBoxService/Public/Js/laytime/laydate.dev.js"></script>


    </head>
    <body>
        <h1>
            <span class="action-span"><a href="/MyBoxService/index.php/Home/Card/add">制作充值卡</a></span>
            <span class="action-span1"><a href="#">充值卡 管理中心</a></span>
            <span id="search_id" class="action-span1"> - 列表 </span>
            <div style="clear:both"></div>
        </h1>
        <div class="form-div">
            <form action="/MyBoxService/index.php/Home/Card/lst.html" name="searchForm" >
                <img src="/MyBoxService/Public/Images/icon_search.gif" width="26" height="22" border="0" alt="search" />
                卡密
                <input type="text" name="search" size="15" value="<?php echo I('get.search'); ?>"/>
                创建时间开始于
                <input type="text" name='start_time' id="start_time" value="<?php echo I('get.start_time'); ?>">
                    结束于
                    <input type="text" name='end_time' id="end_time" value="<?php echo I('get.end_time'); ?>">
                        <input type="submit" value=" 搜索 " class="button" />
                        </form>
                        </div>

                        <form method="post" action="/MyBoxService/index.php/Home/Card/bdel" name="listForm">
                            <div class="list-div" id="listDiv">
                                <table cellpadding="3" cellspacing="1">
                                    <tr>
                                        <th width="40"><input id="selall" type="checkbox" /></th>
                                        <th>id</th>
                                        <th>充值卡号</th>
                                        <th>游戏</th>
                                        <th>充值时间</th>
                                        <th>创建时间</th>
                                        <th>使用时间</th>
                                        <th>使用者</th>
                                        <th>创建者</th>
                                        <th>操作</th>
                                    </tr>
                                    <?php foreach ($data as $k => $v): ?>            <tr>
                                        <td align="center">
                                            <input name="delid[]" class="selall" type="checkbox" value="<?php echo $v['id']; ?>" />
                                        </td>
                                        <td align="center"><?php echo $v['id']; ?></td>
                                        <td align="center">
                                            <?php  if($v['gameid']==1) { echo "坦克世界"; }else if($v['gameid']==2){ echo "战舰世界"; } else if($v['gameid']==3){ echo "战机世界"; } ?>
                                        </td>
                                        <td align="center"><?php echo $v['code']; ?></td>
                                        <td align="center"><?php echo $v['valuetime']; ?></td>
                                        <td align="center"><?php echo $v['createtime']; ?></td>
                                        <td align="center"><?php echo $v['usetime']; ?></td>
                                        <td align="center"><?php echo $v['user']['username']; ?></td>
                                        <td align="center"><?php echo $v['creater']['username']; ?></td>
                                        <td align="center">
                                            <a onclick="return confirm('确定要删除吗？');" href="/MyBoxService/index.php/Home/Card/delete/id/<?php echo $v['id']; ?>" title="编辑">删除</a> 
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>            
                                    <tr>
                                        <td>
                                            <input  type="submit" name="getfile" value="导出所选卡密" style="float:left"/>
                                        </td>
                                        <td><input onclick="return confirm('确定要删除吗？');" type="submit" name="del" value="删除所选" style="float:left"/></td>
                                        <td align="right" nowrap="true" colspan="8">
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

                        <script type="text/javascript">
                            laydate({
                                elem: '#start_time'
                            });
                            laydate({
                                elem: '#end_time'
                            });
                            $("#selall").click(function () {
                                if ($(this).attr("checked"))
                                    $(".selall").attr("checked", "checked");   // 设置所有的都选中
                                else
                                    $(".selall").removeAttr("checked");       // 设置都不选中
                            });

                        </script>