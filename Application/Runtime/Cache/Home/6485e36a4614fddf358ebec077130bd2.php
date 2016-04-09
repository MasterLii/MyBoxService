<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>公众版的公告</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <div>
            <?php echo (htmlspecialchars_decode($data["content"])); ?>

        </div>
    </body>
</html>