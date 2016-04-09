<?php



function randomkeys($length) {
    $returnStr='';
    $pattern = '1234567890ABCDEFGHIJKLOMNOPQRSTUVWXYZ';
    for($i = 0; $i < $length; $i ++) {
        $returnStr .= $pattern {mt_rand ( 0, 35 )}; //生成php随机数
    }
    return $returnStr;
}

function createcard($count,$length,$prefix){
    $array = array();
    for($i = 0; $i < $count; $i ++) {
        $array[]=$prefix . randomkeys($length);
    }
    return $array;
}

function create_guid($namespace = '') {     
    static $guid = '';
    $uid = uniqid("", true);
    $data = $namespace;
    $data .= $_SERVER['REQUEST_TIME'];
    $data .= $_SERVER['HTTP_USER_AGENT'];
    $data .= $_SERVER['LOCAL_ADDR'];
    $data .= $_SERVER['LOCAL_PORT'];
    $data .= $_SERVER['REMOTE_ADDR'];
    $data .= $_SERVER['REMOTE_PORT'];
    $hash = strtoupper(hash('ripemd128', $uid . $guid . md5($data)));
    $guid =
            substr($hash,  0,  8) .
            substr($hash,  8,  4) .
            substr($hash, 12,  4).
            substr($hash, 16,  4).
            substr($hash, 20, 12) ;
    return $guid;
  }
  

  function uploadimg($name) {
        if (!empty($_FILES["upimg"]["name"])) { //提取文件域内容名称，并判断 
            $path = "PlugImage/"; //上传路径 
            //允许上传的文件格式 
            $tp = array("image/pjpeg", "image/jpeg");
            //检查上传文件是否在允许上传的类型 
            if (!in_array($_FILES["upimg"]["type"], $tp)) {
                echo "<script>alert('图片格式不对，需要jpg格式！');history.go(-1);</script>";
                exit;
            }//END IF 
            $filetype = $_FILES['upimg']['type'];
            $type='.jpg';
            if ($_FILES["upimg"]["name"]) {
                $file2 = $path . $name . $type; //图片的完整路径 
                $img = $name . $type; //图片名称 
                $flag = 1;
            }//END IF 
            if ($flag)
                $result = move_uploaded_file($_FILES["upimg"]["tmp_name"], $file2);
        }//END IF 
       if(!empty($_FILES["upfile"]["name"]))
       {
             $path = "PlugZip/"; //上传路径 
            //允许上传的文件格式 
            $tp = array("application/x-zip-compressed","application/octet-stream","");
            //检查上传文件是否在允许上传的类型 
            if (!in_array($_FILES["upfile"]["type"], $tp)) {
                echo "<script>alert('压缩包格式不对，需要zip格式！');history.go(-1);</script>";
                exit;
            }//END IF 
            $filetype = $_FILES['upfile']['type'];
            $type='.zip';
            if ($_FILES["upfile"]["name"]) {
                $file2 = $path . $name . $type; //图片的完整路径 
                $img = $name . $type; //图片名称 
                $flag = 1;
            }//END IF 
            if ($flag)
                $result = move_uploaded_file($_FILES["upfile"]["tmp_name"], $file2);
       }
        
}


function substr_cut($str_cut,$length)
{
    if (strlen($str_cut) > $length)
    {
        $str_cut=mb_substr($str_cut, 0, $length, 'utf-8');

    }
    return $str_cut;
}
