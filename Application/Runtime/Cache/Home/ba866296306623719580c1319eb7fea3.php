<?php if (!defined('THINK_PATH')) exit();?><!-- $Id: brand_info.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>广告 </title>
        <meta name="robots" content="noindex, nofollow">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <link href="/MyBoxService/Public/Styles/general.css" rel="stylesheet" type="text/css" />
            <link href="/MyBoxService/Public/Styles/main.css" rel="stylesheet" type="text/css" />
            <link rel="stylesheet" href="/MyBoxService/Public/kindeditor/themes/default/default.css" />
            <link rel="stylesheet" href="/MyBoxService/Public/kindeditor/plugins/code/prettify.css" />
            <script charset="utf-8" src="/MyBoxService/Public/kindeditor/kindeditor.js"></script>
            <script charset="utf-8" src="/MyBoxService/Public/kindeditor/lang/zh_CN.js"></script>
            <script charset="utf-8" src="/MyBoxService/Public/kindeditor/plugins/code/prettify.js"></script>
                <script>
                KindEditor.ready(function(K) {
                        var editor1 = K.create('textarea[name="content"]', {
                                cssPath : '/MyBoxService/Public/kindeditor/plugins/code/prettify.css',
                                uploadJson : '/MyBoxService/Public/kindeditor/php/upload_json.php',
                                fileManagerJson : '/MyBoxService/Public/kindeditor/php/file_manager_json.php',
                                allowFileManager : true,
                                afterCreate : function() {
                                        var self = this;
                                        K.ctrl(document, 13, function() {
                                                self.sync();
                                                K('form[name=example]')[0].submit();
                                        });
                                        K.ctrl(self.edit.doc, 13, function() {
                                                self.sync();
                                                K('form[name=example]')[0].submit();
                                        });
                                }
                        });
                        prettyPrint();
                });
        </script>
    </head>
    <body>
        <h1>
            <span class="action-span1"><a href="#">广告</a></span>
            <span id="search_id" class="action-span1"> - 广告 </span>
            <div style="clear:both"></div>
        </h1>
        <div class="main-div">
            <!-- /MyBoxService/index.php/Home/Ad/wotad.html:当前方法 -->
            <form method="POST" action="/MyBoxService/index.php/Home/Ad/wotad.html">
                <table cellspacing="1" cellpadding="3" width="100%">

                     <tr>
                        <td class="label">广告：</td>
                        <td>
                            <textarea name="content" style="width:870px;height:650px;"><?php echo $data['content']; ?></textarea>
                            <span class="require-field">*</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><br />
                            <input type="submit" class="button" value=" 确定 " />
                        </td>
                    </tr>
                </table>
            </form>
        </div>

        <div id="footer">

    </body>
</html>