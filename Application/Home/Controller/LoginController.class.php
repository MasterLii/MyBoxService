<?php

namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller{
    public function login()
    {
            if(IS_POST)
            {
                    $model = D('Admin');
                    // 第二个参数：4：代表登录
                    if($model->create($_POST, 4))
                    {
                            $ret = $model->login();
                            if($ret === TRUE)
                            {
                                    $this->success('登录成功！', U('Index/index'));
                                    exit;
                            }
                            else 
                            {
                                $this->error($ret) ;
                            }
                    }
                    else 
                            $this->error($model->getError());
            }
            $this->display();
    }
    public function codeImg()
    {
            $Verify = new \Think\Verify();
            $Verify->entry();
    }
    public function logout()
    {
            $model = D('Admin');
            $model->logout();
            $this->success('操作成功！', U('Home/Login/login'));
    }
}
