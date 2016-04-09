<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function __construct() {
        parent::__construct();
        if(!session('id'))
        {
            $this->error('必须先登录！', U('Home/Login/login'),1);
        }
        if(session('action')!="1"&&session('action')!="0")
        {
            $this->error('您的权限不足！', U('Home/Login/login'),1);
        }
    }
    public function index(){
        $this->display();
    }
    
    public function top(){
        $this->display();
    }
    
    public function left(){
        $action1=session("action");
        $this->assign('action',$action1);
        $this->display();
    }
    
    public function right(){
        $this->display();
    }
    
    public function main(){
        $id=session('id');
        $data=M('Admin')->where("id=$id")->find();
        $this->assign("data", $data);
        $this->display();
    }
    
    public function changepwd(){
        if(IS_POST){
            $oldpwd=I('post.oldpwd');
            $newpwd=I('post.newpwd');
            $newpwd2=I('post.newpwd2');
            if(!$oldpwd||!$newpwd||!$newpwd2)
            {
                $this->error('密码不能为空！', U('Home/index/changepwd'),2);
            }
            if($newpwd!=$newpwd2)
            {
                $this->error('两次输入的密码不一样！', U('Home/index/changepwd'),2);
            }
            $id=session('id');
            $data=M('Admin')->where("id=$id")->find();
            if($data['password']!=$oldpwd)
            {
                $this->error('您输入的密码不正确！', U('Home/index/changepwd'),2);
            }
            $data['password']=$newpwd;
            M('Admin')->save($data);
            $this->success('修改成功', U('main') );
        }
        $this->display();
        
    }

}