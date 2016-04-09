<?php 

namespace Home\Controller;
use Think\Controller;
class UserController extends Controller{
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
    public function add(){
        
        if(IS_POST){
            $model=D('User');

            if($model->create())
            {
                $model->status=1;
                if($model->add())
                {
                    $this->success('添加成功', U('lst') );
                }else{
                    $this->error('添加失败！');
                }
                
            }  else {
                $this->error($model->getError());
            }
        }
        $this->display();
    }
    

    
    public function lst(){
        $model=D('User');
        $data=$model->search();//返回了return array(                'show'=>$show,                'list'=>$list            );
        
        $this->assign(array(
            'page'=>$data['page'],
            'data'=>$data['data']
        ));
        
        $this->display();
    }
    
    public function change($id){
        $model=D('User');
        $result=$model->where("id='$id'")->find();
        if($result['status']==1)
        {
            $result['status']=0;
        }else{
            $result['status']=1;
        }
        $model->save($result);
        $this->success('操作成功' );
    }
    
   
}
