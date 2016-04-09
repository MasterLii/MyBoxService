<?php

namespace Home\Controller;
use Think\Controller;

class SerController extends Controller{
    /**
     *
     */
    
    public function login(){
        $username=I('post.username');
        $password=I('post.password');
        $mcode=I('post.mcode');
        $game=I('post.game');
        $model=D('User');
        $result= $model->where("username='$username' and password='$password'")->find();
        header("Content-Type: text/html; charset=UTF-8");
        
        if($result==null)
        {
            echo 'false||' . '账号或密码错误！';
            return;
        }
        if($result["status"]==0)
        {
            echo 'false||' .'您的账号已经被封禁！';
            return;
        }
        
//        $result["lastlogin"]=date('Y-m-d H:i:s',time());
//         $result["mcode"]=$mcode;
//                     if($result["logintime"]==null)
//            {
//                $result["logintime"]=1;
//            }else{
//                $result["logintime"]=$result["logintime"]+1;
//            }
//        $model->save($result);
//        echo 'logintrue||欢迎使用黑科技盒子O(∩_∩)O';
//        return;
        $etime=  strtotime($result["expiretime"]);
        $wsetime=  strtotime($result["wsetime"]);
        if($game=="wot"&&$result["status"]==1&& $etime>time())
        {
            $result["lastlogin"]=date('Y-m-d H:i:s',time());
            $result["mcode"]=$mcode;
            if($result["logintime"]==null)
            {
                $result["logintime"]=1;
            }else{
                $result["logintime"]=$result["logintime"]+1;
            }
            $model->save($result);
            echo 'logintrue||' ."账号到期时间". $result["expiretime"];
            return;
        }        
        else if($result["status"]==1&& $wsetime>time()){
            $result["lastlogin"]=date('Y-m-d H:i:s',time());
            $result["mcode"]=$mcode;
            if($result["logintime"]==null)
            {
                $result["logintime"]=1;
            }else{
                $result["logintime"]=$result["logintime"]+1;
            }
            $model->save($result);
            echo 'logintrue||' ."账号到期时间". $result["wsetime"];
            return;
        }          
        else{
            echo 'false||' . '请充值您的账号，充值链接地址请查看www.cooooke.cn！';
            return;
        }
        
    }
    
    public function register()
    {
         if(IS_POST){
            $username=I('post.username');
            $password=I('post.password');
            $password1=I('post.password1');
            $code=I('post.code');
            
            if($username==""||$password==""||$password1==""||$code=="")
            {
                $this->error('注册失败，请重新填写用户信息！');
            }
            
            $verify = new \Think\Verify();
            if(!$verify->check($code,"")){
                $this->error('验证码错误！');
            }
            
            if($password!=$password1)
            {
                $this->error('两次输入的密码不一样！');
            }
            $model=D('User');
            if($model->create()){
                $model->status=1;
                $model->add();
                $this->error("注册成功！可以使用了");
            }else{
                $this->error($model->getError());
            }
         }
         $this->display();
    }
    
    public function getPwd()
    {
        $username=I('post.username');
        $email=I('post.email');
        if($username==""||$email=="")
        {
            return;
        }
        $model=D('User');
        $result= $model->where("username='$username' and email='$email'")->find();
        header("Content-Type: text/html; charset=UTF-8");
        if($result!=null)
        {
            echo $result["password"];
        }
        else{
            echo "账号或安全邮箱不正确";
        }
    }
    
    public function changePwd(){
        $username=I('post.username');
        $passwordold=I('post.passwordold');
        $passwordnew=I('post.passwordnew');
        if($username==""||$passwordold==""||$passwordnew=="")
        {
            return;
        }
        $model=D('User');
        $result= $model->where("username='$username' and password='$passwordold'")->find();
        if($result==null)
        {
            echo "账号或密码错误!";
        }
        else
        {
            $result["password"]=$passwordnew;
            $model->save($result);
            echo "ok";
        }
    }
    
    public function recharge(){
         $username=I('post.username');
         $password=I('post.password');
         $cdk=I('post.cdk');
         if($username==""||$password==""||$cdk=="")
        {
            return;
        }
         $usermodel=M('User');
         $result= $usermodel->where("username='$username' and password='$password'")->find();
         if($result==null)
         {
             echo '账号或密码不正确！';
             exit;
         }
         $data=M('Card')->where("code='$cdk'")->find();
         if($data==null)
         {
             echo '卡密不正确，大小写看清！';
             exit;
         }
         if($data['userid']||$data['usetime'])
         {
             echo '卡密已经被使用！';
             exit;
         }
         $aid=$data['createrid'];
         $gameid=$data['gameid'];
         $admindata=M('Admin')->where("id=$aid")->find();
         
         $valuetime=$data['valuetime'];
         $cardprice=C('CARD_PRICE');
         
         $sellmoney = $cardprice[$valuetime]*$admindata['discount']/10;
         $admindata['sellmoney']=$admindata['sellmoney']+$sellmoney;
         $admindata['sellcount']=$admindata['sellcount']+1;
         
         if(strtotime($result['expiretime'])>time())
         {
             $expiretime=date('Y-m-d H:i:s',strtotime($result['expiretime'] . '+'.$valuetime.' day'));
         }else{
             
             $expiretime=date('Y-m-d H:i:s',strtotime( '+'.$valuetime.' day'));
         }
         if($gameid==2)
         {
                      if(strtotime($result['wsetime'])>time())
                    {
                        $wsetime=date('Y-m-d H:i:s',strtotime($result['wsetime'] . '+'.$valuetime.' day'));
                    }else{

                        $wsetime=date('Y-m-d H:i:s',strtotime( '+'.$valuetime.' day'));
                    }
                    $result['wsetime'] =$wsetime;
         }
         $result['expiretime'] =$expiretime;
         
         
         $data['usetime']=date('Y-m-d H:i:s');
         $data['userid']=$result['id'];
         
         M('Card')->save($data);
         M('Admin')->save($admindata);
         $usermodel->save($result);
         if($gameid==1){
             echo '坦克世界版盒子，充值成功！您的到期时候为:' .$expiretime;
             
         }else if($gameid==2){
             echo '战舰世界版盒子，充值成功！您的到期时候为:' .$expiretime;
         }
         
    }
    public function check(){
        
         $username=I('get.username');
         $password=I('get.password');
         $game=I('get.game');                  
        $model=D('User');
        $result= $model->where("username='$username' and password='$password'")->find();
        header("Content-Type: text/html; charset=UTF-8");
        
        if($result==null)
        {
            echo '请购买正版黑科技盒子！';
            return;
        }
        if($result["status"]==0)
        {
            echo '请购买正版黑科技盒子！';
            return;
        }
        $etime=  strtotime($result["wsetime"]);
        //登录成功
        if($result["status"]==1&& $etime>time())
        {
            $result["lastlogin"]=date('Y-m-d H:i:s',time());
                        
            $model->save($result);
            session("usercheck", $username);
          
            $this->success('正在拼命加载中...', U('Home/Ser/wows_showing?category=2'),1);
            return;
        }else{
            echo '请购买正版黑科技盒子！';
            return;
        }
          
    }
    //坦克
    public function show(){
        
            $where = 1;
            // 每页的条数
            $where .=" and status=1 and gid=1";
            
            if(($cid=I('get.category')) && $cid!="-1")
            {
                $where.=" and cid =$cid";
            }
            if(($search=I('get.search')) && !ctype_space($search))
            {
                $where.=' and name like "%'.$search.'%"';
            }
           
            $perpage = 5;
            // 获取总的记录数
            $model=D('Plugin');
            $totalRecord = $model->where($where)->count();
            // 生成翻页的对象
            $page = new \Think\Page($totalRecord, $perpage);
            
            $cate=M('Category')->select();
            $this->assign(array(
                'page'=>$page->show(),
                'data'=>$model->order('id desc')->where($where)->limit($page->firstRow, $page->listRows)->select(),
                'cate'=>$cate
            ));
            $this->display('wot_show');
    }
    //战机
    public function wowp_show(){
        
            $where = 1;
            // 每页的条数
            $where .=" and status=1 and gid=2";
            
            if(($cid=I('get.category')) && $cid!="-1")
            {
                $where.=" and cid =$cid";
            }
           
            $perpage = 5;
            // 获取总的记录数
            $model=D('Plugin');
            $totalRecord = $model->where($where)->count();
            // 生成翻页的对象
            $page = new \Think\Page($totalRecord, $perpage);
            
            $cate=M('Category')->select();
            $this->assign(array(
                'page'=>$page->show(),
                'data'=>$model->order('id desc')->where($where)->limit($page->firstRow, $page->listRows)->select(),
                'cate'=>$cate
            ));
            $this->display();
    }
    //战舰
    public function wows_show(){
        
        echo '<!DOCTYPE html><html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>    
        请 到官网下载最新版的黑科技盒子-战舰版。12月7日 15点更新的最新版   </br>
         官网地址 www.cooooke.cn ，进入里面的软件下载内下载新版</br>
        如果您已经是最新版了，请重新登录软件即可           </br>              

        请使用最新的正版黑科技盒子哦</br>
    </body>
</html>';
    }
    //战舰
    public function wows_showing(){
            if(!session('usercheck'))
           {               
               $this->error('请使用最新的正版黑科技盒子哦！', U('Home/Ser/wows_show'),1);
           }
            $where = 1;
            // 每页的条数
            $where .=" and status=1 and gid=3";
            
            if(($cid=I('get.category')) && $cid!="-1")
            {
                $where.=" and cid =$cid";
            }
           
            $perpage = 5;
            // 获取总的记录数
            $model=D('Plugin');
            $totalRecord = $model->where($where)->count();
            // 生成翻页的对象
            $page = new \Think\Page($totalRecord, $perpage);
            
            $cate=M('Category')->select();
            $this->assign(array(
                'page'=>$page->show(),
                'data'=>$model->order('id desc')->where($where)->limit($page->firstRow, $page->listRows)->select(),
                'cate'=>$cate
            ));
            $this->display('wows_showing');
    }
    
    public function pluginfo()
    {
        $id=I('post.id');
        if(!$id)
        {
            exit;
        }
        $data=M('Plugin')->where("guid='$id'")->find();
        if(!$data)
        {
            exit;
        }
        $str='插件名称：'.$data['name'] . '|| ||简介：' . $data['remark'];
        echo $str;
    }
    
    public function info()
    {
        $id=I('post.id');
        if(!$id)
        {
            exit;
        }
        $data=M('Plugin')->where("guid='$id'")->find();
        if(!$data)
        {
            exit;
        }
        $str=$data['name'] . '||' . $data['edition'] . '||' .$data['uploadtime'] . '||' . $data['support'] .'||'. $data['remark'];
        echo $str;
    }
    
    public function pluginversion()
    {
        $game=I('post.game');
        $plugver= C('PLUGIN_VERSION');
        if($game)
        {
            echo $plugver[$game];
        }else{
            echo $plugver["wot"];
        }
    }

    public function codeImg()
    {
            $config =    array(
                        'imageW'    =>    217,    // 验证码字体大小
                        'imageH'      =>    47,     // 验证码位数
                    );
            $Verify = new \Think\Verify($config);
            $Verify->entry();
    }
    
    //系统公告
    public function notice()
    {
        $game=I('get.game');
        if(!$game)
        {
            $game="wot";
        }
           
        if($game=='wot')
        {
            $data=M('Adad')->where("id=0")->find();
        }else if($game=='wows'){
            $data=M('Adad')->where("id=1")->find();
        }        
        $this->assign("data",$data);
        $this->display('publicNotice');
      
    }
    
    //官网动态
    public function sysnotice()
    {
        $game=I('get.game');
        if(!$game)
        {
            $game="wot";
        }

        $this->display($game . "_sysnotice");
    }
    
   
    
    public function edition()
    {
        echo C('SOFT_VERSION');
    }
}
