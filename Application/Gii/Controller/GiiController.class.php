<?php
namespace Gii\Controller;
use Think\Controller;
class GiiController extends Controller{
    public function index(){
        if(IS_POST){
            $tableName=I('post.tableName');
            $moduleName=I('post.moduleName');
            if($tableName&&$moduleName)
            {
                $moduleName=  ucfirst($moduleName);
                $cDir='./Application/' . $moduleName . '/Controller';
                $mDir='./Application/' . $moduleName . '/Model';
                $vDir='./Application/' . $moduleName . '/View';
                if(!is_dir($cDir))
                    mkdir ($cDir,0777,true);
                if(!is_dir($mDir))
                    mkdir ($mDir,0777,true);
                if(!is_dir($vDir))
                    mkdir ($vDir,0777,true);
                
                $mvcName=$this->changeName($tableName);
                
                 //---------------------------------控制器生成------------------------------------
                ob_start();
                include('./Application/Gii/Template/Controller.php');
                $str="<?php \r\n"  .  ob_get_clean();
                
                $controllerFileName=$cDir . '/' . $mvcName . 'Controller.class.php';
                if(!file_exists($controllerFileName))
                {
                    file_put_contents($controllerFileName, $str);
                }
                
                //---------------------------------Model生成------------------------------------
                
                $db=M();
                $fields=$db->query('show full fields from '.$tableName);
                var_dump($fields);
                ob_start();
                include('./Application/Gii/Template/Model.php');
                $str="<?php \r\n"  .  ob_get_clean();
                
                $modelFileName=$mDir . '/' . $mvcName . 'Model.class.php';
                if(!file_exists($modelFileName))
                {
                    file_put_contents($modelFileName, $str);
                }
                
                /****************************** 生成三个静态页 *****************************/
                // 先生成静态页所在的控制器的目录
                if(!is_dir($vDir.'/'.$mvcName))
                        mkdir($vDir.'/'.$mvcName, 0777, TRUE);
                // 1.生成添加的表单-add.html
                ob_start();
                include('./Application/Gii/Template/add.html');
                $str = ob_get_clean();
                $addName=$vDir.'/'.$mvcName.'/add.html';
                if(!file_exists($addName))
                {
                    file_put_contents($addName, $str);
                }
                // 2. 生成修改的表单-save.html
                ob_start();
                include('./Application/Gii/Template/edit.html');
                $str = ob_get_clean();
                $editName=$vDir.'/'.$mvcName.'/edit.html';
                if(!file_exists($saveName))
                {
                    file_put_contents($editName, $str);
                }
                // 3. 生成列表页-lst.html
                ob_start();
                include('./Application/Gii/Template/lst.html');
                $str = ob_get_clean();
                $lstName=$vDir.'/'.$mvcName.'/lst.html';
                if(!file_exists($lstName))
                {
                    file_put_contents($lstName, $str);
                }
                $this->success('完成！');
                exit;
                
            }
        }
        $this->display();
    }
    
    protected function changeName($tableName)
    {
        $tableName = str_replace(C('DB_PREFIX'), '', $tableName);
        // 2. 去掉下划线
        $tableName = explode('_', $tableName);
        // 把数组中每个值都使用ucfirst这个函数处理一遍
        $tableName = array_map('ucfirst', $tableName);
        // 把数组中的每个单词连到一起
        return implode('', $tableName);
    }
}
