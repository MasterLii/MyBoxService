<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>统计列表 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/BoxService/Public/Styles/general.css" rel="stylesheet" type="text/css" />
<link href="/BoxService/Public/Styles/main.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="/BoxService/Public/Js/jquery-1.4.2.min.js"></script>
</head>
<body>
<h1>
    <span class="action-span"><a href="/BoxService/index.php/Home/Zhubo/add">添加</a></span>
    <span class="action-span1"><a href="#">主播推广统计提成</a></span>
    <span id="search_id" class="action-span1"> - 列表 </span>
    <div style="clear:both"></div>
</h1>
<form method="post" action="/BoxService/index.php/Home/Zhubo/bdel" name="listForm">
    <div class="list-div" id="listDiv">
        <table cellpadding="3" cellspacing="1">
            <tr>
                <th width="40"><input id="selall" type="checkbox" /></th>
 
                                <th>主播名字</th>
                                <th>支付宝</th>
                                <th>周一/月-日/单数/收入</th>
                                <th>周二</th>
                                <th>周三</th>
                                <th>周四</th>
                                <th>周五</th>
                                <th>周六</th>
                                <th>周日</th>
                                <th>操作</th>
            </tr>
            <?php foreach ($data as $k => $v): ?>            <tr>
                <td align="center">
               		<input name="delid[]" class="selall" type="checkbox" value="<?php echo $v['id']; ?>" />
                </td>
                                
                                <td align="center"><?php echo $v['name']; ?></td>
                                <td align="center"><?php echo $v['zhifubao']; ?></td>
                                <td align="center"><?php echo $v['monday']; ?></td>
                                <td align="center"><?php echo $v['tuesday']; ?></td>
                                <td align="center"><?php echo $v['wednesday']; ?></td>
                                <td align="center"><?php echo $v['thursday']; ?></td>
                                <td align="center"><?php echo $v['friday']; ?></td>
                                <td align="center"><?php echo $v['saturday']; ?></td>
                                <td align="center"><?php echo $v['sunday']; ?></td>
                                <td align="center">
                <a href="/BoxService/index.php/Home/Zhubo/edit/id/<?php echo $v['id']; ?>" title="编辑">编辑</a>
                <a onclick="return confirm('确定要删除吗？');" href="/BoxService/index.php/Home/Zhubo/delete/id/<?php echo $v['id']; ?>" title="编辑">移除</a> 
                </td>
            </tr>
           	<?php endforeach; ?>            <tr>
            	<td><input type="submit" value="删除所选" /></td>
                <td align="right" nowrap="true" colspan="11">
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
$("#selall").click(function(){
	if($(this).attr("checked"))
		$(".selall").attr("checked","checked");   // 设置所有的都选中
	else
		$(".selall").removeAttr("checked");       // 设置都不选中
});
</script>