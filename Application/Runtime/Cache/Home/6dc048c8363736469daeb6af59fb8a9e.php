<?php if (!defined('THINK_PATH')) exit();?><!-- $Id: brand_info.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>插件 - 修改 </title>
        <meta name="robots" content="noindex, nofollow">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <link href="/MyBoxService/Public/Styles/general.css" rel="stylesheet" type="text/css" />
            <link href="/MyBoxService/Public/Styles/main.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1>
            <span class="action-span"><a href="/MyBoxService/index.php/Home/Plugin/lst">列表</a></span>
            <span class="action-span1"><a href="#">插件 管理中心</a></span>
            <span id="search_id" class="action-span1"> - 修改 </span>
            <div style="clear:both"></div>
        </h1>
        
        
        <div class="main-div">
            <!-- /MyBoxService/index.php/Home/Plugin/edit/id/22:当前方法 -->
             <form method="POST" action="/MyBoxService/index.php/Home/Plugin/edit/id/22" enctype="multipart/form-data">
                <table cellspacing="1" cellpadding="3" width="100%">
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>" /> 
                 <tr>
                    <td class="label">游戏种类：</td>
                    <td>
                        <select name="gid" style="width: 145px;">
                            <?php  foreach($gamelist as $key=>$value){ if($data['gid']==$key) $flag="SELECTED"; ?>
                            <option value ="<?php echo $key; ?>" <?php echo ($flag); ?>><?php echo $value; ?></option>  
                           <?php  $flag=""; } ?>
                        </select>
                        <span class="require-field">*</span>
                    </td>
                  </tr>
                    <tr>
                        <td class="label">插件名称：</td>
                        <td>
                            <input type="text" name="name" maxlength="60" value="<?php echo $data['name']; ?>" />
                            <span class="require-field">*</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">分类：</td>
                        <td>
                            
                            <select name="cid" style="width: 145px;">  
                                <?php  $flag=""; foreach($cate as $value){ if($value['id']==$data['cid']) $flag="SELECTED"; ?>
                                <option value ="<?php echo $value['id']; ?>" <?php echo ($flag); ?>><?php echo $value['name']; ?></option>  
                               <?php  $flag=""; } ?>
                            </select>  
                            
                            <span class="require-field">*</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">图片：</td>
                        <td>
                            <input name="upimg" type="file" accept=".jpg,JPG">  
                            <span class="require-field">jpg文件 不选则不更改源文件</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">插件文件：</td>
                        <td>
                            <input name="upfile" type="file" accept=".zip,.ZIP">  
                            <span class="require-field">zip文件 不选则不更改源文件</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">兼容性：</td>
                        <td>
                            <input type="text" name="support" maxlength="60" value="<?php echo $data['support']; ?>" />
                            <span class="require-field">*</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">版本：</td>
                        <td>
                            <input type="text" name="edition" maxlength="60" value="<?php echo $data['edition']; ?>" />
                            <span class="require-field">*</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">状态：</td>
                        <td>
                            <?php if($data['status']==1):?>
                             <input type="radio" name="status" value="1" checked/> 显示
                             <input type="radio" name="status" value="0" /> 隐藏
                              <?php else: ?>
                              <input type="radio" name="status" value="1" /> 显示
                             <input type="radio" name="status" value="0" checked/> 隐藏
                             <?php endif ?>

                            <span class="require-field">*</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">插件简介：</td>
                        <td>
                            <textarea name="remark" rows="6" cols="40"><?php echo $data['remark']; ?></textarea>
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