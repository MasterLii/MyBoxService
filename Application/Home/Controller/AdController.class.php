<?php

namespace Home\Controller;
use Think\Controller;
class AdController extends Controller {
    
    public function __construct() {
        parent::__construct();
        if(!session('id'))
        {
            $this->error('必须先登录！', U('Home/Login/login'),1);
        }
        if(session('action')!="1")
        {
            $this->error('您的权限不足！', U('Home/Index/Index'),1);
        }
    }
    //put your code here
    public function wotad(){
        $model=D('Adad');
        $data=$model->where("id=0")->find();
        if(IS_POST){      
            if($model->create())
            {           
                $model->content=I('post.content');
                if($model->where('id=0')->save()!==false)
                {
                        $this->success('修改成功', U('wotad') );
                }else{
                        $this->error('修改失败！');
                }
            }  else {
                $this->error($model->getError());
            }

        }
        $this->assign('data',$data);
        $this->display('index');
    }
    
     public function wowsad(){
        $model=D('Adad');
        $data=$model->where("id=1")->find();
        if(IS_POST){      
            if($model->create())
            {           
                $model->content=I('post.content');
                if($model->where('id=1')->save()!==false)
                {
                        $this->success('修改成功', U('wotad') );
                }else{
                        $this->error('修改失败！');
                }
            }  else {
                $this->error($model->getError());
            }

        }
        $this->assign('data',$data);
        $this->display('index');
    }
}
