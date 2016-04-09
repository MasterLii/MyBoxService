<?php 

namespace Home\Controller;
use Think\Controller;
class AdminController extends Controller{
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
            $model=D('Admin');

            if($model->create())
            {
                $model->sellcount=0;
                $model->sellmoney=0;
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
    
    public function edit($id){
        if($id==1)
        {
                $this->error('修改失败！');
        }
        $model=D('Admin');
        if(IS_POST){
            
            
            if($model->create())
            {
                if($model->save()!==false)
                {
                    $this->success('修改成功', U('lst') );
                }else{
                    $this->error('修改失败！');
                }
                
            }  else {
                $this->error($model->getError());
            }
        }
        $data=$model->where("id=$id")->find();
        $this->assign('data',$data);
        $this->display();
    }
    
    public function scanpwd($id){
        if($id==1)
        {
                $this->error('您无权限做此操作！');
        }
        $model=D('Admin');
        $data=$model->where("id=$id")->find();
        $this->assign('data',$data);
        $this->display();
    }
    
    public function lst(){
        $model=D('Admin');
        $data=$model->search();//返回了return array(                'show'=>$show,                'list'=>$list            );
        
        $this->assign(array(
            'page'=>$data['page'],
            'data'=>$data['data']
        ));
        
        $this->display();
    }
    
//    public function delete($id){
//    
//        M('Admin')->delete($id);
//
//        $this->success('删除成功' );
//    }
//    
//    public function bdel(){
//        $delid=I('post.delid');
//        if($delid){
//            
//                $delid=implode(',' , $delid);
//                M('Admin')->delete($delid);
//
//        }
//        $this->success('删除成功' );
//    }
    
}
