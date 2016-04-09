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
<h1 >
    <span class="action-span1" align="center"><img src="/BoxService/Public/MyImg/83.png" style="display:block;margin-left:auto;margin-right:auto; "/></span>
    <div style="clear:both"></div>
</h1>

    <div class="list-div" id="listDiv">
        <table cellpadding="3" cellspacing="1">
            <tr>

 
                                <th>主播名字</th>
                                <th>支付宝</th>
                                <th>周一/月-日/单数/收入</th>
                                <th>周二/月-日/单数/收入</th>
                                <th>周三/月-日/单数/收入</th>
                                <th>周四/月-日/单数/收入</th>
                                <th>周五/月-日/单数/收入</th>
                                <th>周六/月-日/单数/收入</th>
                                <th>周日/月-日/单数/收入</th>
                               
            </tr>
            <?php foreach ($data as $k => $v): ?>            <tr>

                                
                                <td align="center"><?php echo $v['name']; ?></td>
                                <td align="center"><?php echo $v['zhifubao']; ?></td>
                                <td align="center"><?php echo $v['monday']; ?></td>
                                <td align="center"><?php echo $v['tuesday']; ?></td>
                                <td align="center"><?php echo $v['wednesday']; ?></td>
                                <td align="center"><?php echo $v['thursday']; ?></td>
                                <td align="center"><?php echo $v['friday']; ?></td>
                                <td align="center"><?php echo $v['saturday']; ?></td>
                                <td align="center"><?php echo $v['sunday']; ?></td>
                   
            </tr>
           	<?php endforeach; ?>            <tr>
            	<td></td>
                <td align="right" nowrap="true" colspan="11">
                    <div id="turn-page">
                        <?php echo $page; ?>                    </div>
                </td>
            </tr>
        </table>
    </div>


    <div id="footer" style="color:black;text-align:left;font-size: 13px;font-weight:bold">
        要求主播要做到的: <span style="color:red"> 1、直播口头推广  2、直播口头推广</span></br></br>
    
     <span style="color:red">每成功一单，提成这个单子的10%”15天结算一次“务必告知自己推广的用户”下单“报推荐下单主播名字在下单前代练玩家提推荐主播的名字，才能立减50元如拍单后，再提推荐主播的名字，此单无任何提成我们每一单，都会保留拍单截图。</span></br>
    <span style="color:red">举例如下：</span></br>
      <span style="color:green">我是38683XXX主播介绍过来代练的，想要练XXX车XXX主播说，优惠50元， 主播名字：【XXX】主播</span></br>
<span style="color:red">此单下单成功的下，无论此单价值多少，推荐此单的主播提成这个单子价格的  <span style="color:green">10%</span></span></br></br>
<span style="color:red">工作室这边，不会吞单，这一点，多说无意,有钱大家一起赚，赚多赚少全靠自己的努力！  </span></br></br>
<span style="color:green">此主播收入后台账目表每个星期日晚上12点更新</span>


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