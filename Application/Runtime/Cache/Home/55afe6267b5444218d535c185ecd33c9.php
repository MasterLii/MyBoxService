<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>插件 - 列表 </title>
        <meta name="robots" content="noindex, nofollow">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <link href="/MyBoxService/Public/Styles/general.css" rel="stylesheet" type="text/css" />
            <link href="/MyBoxService/Public/Styles/main.css" rel="stylesheet" type="text/css" />
            <script language="javascript" src="/MyBoxService/Public/Js/jquery-1.4.2.min.js"></script>
    </head>
    <body>
        <h1>
            <span class="action-span"><a href="/MyBoxService/index.php/Home/Plugin/add?gid=3">添加战舰插件</a></span>
            <span class="action-span"><a href="/MyBoxService/index.php/Home/Plugin/add?gid=2">添加战机插件</a></span>
            <span class="action-span"><a href="/MyBoxService/index.php/Home/Plugin/add?gid=1">添加坦克插件</a></span>
            <span class="action-span1"><a href="#">插件</a></span>
            <span id="search_id" class="action-span1"> - 列表 </span>
            <div style="clear:both"></div>
        </h1>
        <div class="form-div">
            <form action="/MyBoxService/index.php/Home/Plugin/lst.html" name="searchForm" >
                 <img src="/MyBoxService/Public/Images/icon_search.gif" width="26" height="22" border="0" alt="search" />
                 名称
                 <input type="text" name="search" size="15" value="<?php echo I('get.search'); ?>"/>
                 <select name="gid">
                     <option value="-1">游戏种类</option>
                     <?php  $gid=I('get.gid'); foreach($gamelist as $key=>$value) { if($gid==$key) $str='selected'; ?>
                        <option value="<?php echo $key; ?>" <?php echo ($str); ?>><?php echo $value; ?></option>
                    <?php  $str=""; } ?>
                 </select>
                 <select name="category">
                     <option value="-1">插件分类</option>
                     <?php  $cid=I('get.category'); foreach($cate as $value) { if($cid==$value['id']) $str='selected'; ?>
                        <option value="<?php echo $value['id']; ?>" <?php echo ($str); ?>><?php echo $value['name']; ?></option>
                    <?php  $str=""; } ?>
                 </select>
                 <select name="status">
                     <option value="-1">插件状态</option>
                     <option value='1'>显示</option>
                     <option value='2'>隐藏</option>
                 </select>
                 <input type="submit" value=" 搜索 " class="button" />
               </form>
         </div>
        <form method="post" action="/MyBoxService/index.php/Home/Plugin/bdel" name="listForm">
            <div class="list-div" id="listDiv">
                <table cellpadding="3" cellspacing="1">
                    <tr>
                        <th width="40"><input id="selall" type="checkbox" /></th>
                         <th>图片</th>
                        <th>插件名称</th>
                        <th>游戏种类</th>
                        <th>分类</th>
                        <th>兼容性</th>
                        <th>版本</th>
                        <th>上传时间</th>
                        <th>状态</th>
                        <th>插件简介</th>
                        <th>操作</th>
                    </tr>
                    <?php foreach ($data as $k => $v): ?>            
                    <tr>
                        <td align="center">
               		<input name="delid[]" class="selall" type="checkbox" value="<?php echo $v['id']; ?>" />
                        </td>

                        <td align="center">
                            <img src="/PlugImage/<?php echo $v['guid']; ?>.jpg"   height="100" width="100"/>
                        </td>
                        <td align="center"><?php echo $v['name']; ?></td>
                        <td align="center">
                            <?php  if($v['gid']==1){ echo '<span style="color:#C06000;">坦克世界</span>';} else if($v['gid']==2){ echo '<span style="color:#00FFFF;">战机世界</span>';} else if($v['gid']==3){ echo '<span style="color:#0000FF;">战舰世界</span>';} ?>
                        </td>
                         <td align="center"><?php echo $v['cate']['name']; ?></td>
                        
                        <td align="center"><?php echo $v['support']; ?></td>
                        <td align="center"><?php echo $v['edition']; ?></td>
                        <td align="center"><?php echo $v['uploadtime']; ?></td>
                        <td align="center">
                            <?php  if($v['status']==1) echo '显示'; else echo '<span style="color:red;">隐藏</span>'; ?>
                        </td>
                       <td align="center"><?php echo substr_cut($v['remark'],20); ?></td>
                        <td align="center">
                            <a href="/MyBoxService/index.php/Home/Plugin/edit/id/<?php echo $v['id']; ?>" title="编辑">编辑</a>
                            <a onclick="return confirm('确定要删除吗？');" href="/MyBoxService/index.php/Home/Plugin/delete/id/<?php echo $v['id']; ?>">删除</a> 
                        </td>
                    </tr>
                    <?php endforeach; ?>            
                    <tr>
                        <td>
                            <input onclick="return confirm('确定要批量显示吗？');"  type="submit" name="show" value="批量显示"/>
                        </td>
                        <td>
                            <input onclick="return confirm('确定要批量隐藏吗？');" type="submit" name="hidd" value="批量隐藏"/>
                        </td>
                        <td align="right" nowrap="true" colspan="10">
                            <div id="turn-page">
                                <?php echo $page; ?>                    
                            </div>
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