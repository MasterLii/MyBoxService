<?php 

namespace Home\Controller;
use Think\Controller;
class CategoryController extends Controller{
    
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
            $model=D('Category');

            if($model->create())
            {
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
        $model=D('Category');
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
    
    public function lst(){
        $model=D('Category');
        $data=$model->search();//返回了return array(                'show'=>$show,                'list'=>$list            );
        
        $this->assign(array(
            'page'=>$data['page'],
            'data'=>$data['data']
        ));
        
        $this->display();
    }
    
    public function delete($id){
    
        M('Category')->delete($id);

        $this->success('删除成功' );
    }

    
}
