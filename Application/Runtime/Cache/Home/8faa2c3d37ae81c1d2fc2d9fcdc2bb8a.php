<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <title>

            </title>
            <link href="/BoxService/Public/Styles/wows_show.css" rel="stylesheet">
                <script type="text/javascript">
                    function myFunction(obj) {
                        obj.innerHTML = "安装中稍等";
                        setTimeout(function () {
                            obj.innerHTML = "完成";
                        }, 2500)
                    }
                </script>
     </head>
                <body>
                    <form method="post" action="./PluginList.aspx_files/PluginList.aspx.html">
                        <div>
                            <div class="wrap box_bg index_wrap">
                                <div class="box_top_nav">
                                   <ul>
                                        
                                        <?php
 $cid=I('get.category'); foreach($cate as $value) { if($cid==$value['id']) $flag="class='selected'"; ?>
                                            <li <?php echo $flag ?>><a href="/BoxService/index.php/Home/Ser/wows_show?category=<?php echo $value['id'] ?>" target="_self"><?php echo $value['name'] ?></a></li>
                                            <?php
 $flag=""; } ?>
                                   </ul>
                                </div>

                                <div class="main_content tankpaint_page">
                                    <ul class="tankpaint_list">
                                      <?php
 foreach($data as $value) {?>
                                      <li>
                                          <a class="paint_pic"><img src="/PlugImage/<?php echo $value['guid'] ?>.jpg" style="height:90px;width:120px;border:solid 2px white;"></a>
                                            <div class="btn-bar">
                                                <a href="<?php echo $value['guid'] ?>.zip" class="get_it" onclick="myFunction(this)">下载</a>
                                                <a href="<?php echo $value['guid'] ?>.inf" class="get_it">详情</a>
                                            </div>
                                            <div class="content">
                                                <span class="info" style="font-size:13px;">【<?php echo $value['edition'] ?>】<?php echo $value['name'] ?><em class="author" style="color:#009900  ;font-weight:bold;">兼容性：<?php echo $value['support'] ?></em><em class="size" style="color:#FF0000">更新时间：<?php echo $value['uploadtime'] ?></em></span>
                                                <p>
                                                    <?php echo substr_cut($value['remark'],120) ?>
                                                </p>
                                            </div>
                                      </li>
                                      <?php }?>





                                    </ul>


                                    <div class="tankpaint_page_bottom clearfix">

                                        <div class="fr rounded">
                                            <div class="mod-page">
                                                <?php echo $page?>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>


                </body>
</html>