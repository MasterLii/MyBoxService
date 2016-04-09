
namespace <?php echo $moduleName; ?>\Controller;
use Think\Controller;
class <?php echo $mvcName; ?>Controller extends Controller{
    
    public function add(){
        
        if(IS_POST){
            $model=D('<?php echo $mvcName; ?>');

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
        $model=D('<?php echo $mvcName; ?>');
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
        $model=D('<?php echo $mvcName; ?>');
        $data=$model->search();//返回了return array(                'show'=>$show,                'list'=>$list            );
        
        $this->assign(array(
            'page'=>$data['page'],
            'data'=>$data['data']
        ));
        
        $this->display();
    }
    
    public function delete($id){
    
        M('<?php echo $mvcName; ?>')->delete($id);

        $this->success('删除成功' );
    }
    
    public function bdel(){
        $delid=I('post.delid');
        if($delid){
            
                $delid=implode(',' , $delid);
                M('<?php echo $mvcName ?>')->delete($delid);

        }
        $this->success('删除成功' );
    }
    
}
