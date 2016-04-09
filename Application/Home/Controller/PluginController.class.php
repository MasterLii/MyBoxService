<?php 

namespace Home\Controller;
use Think\Controller;
class PluginController extends Controller{
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

            $guid=  strtolower(create_guid()) ;
            uploadimg($guid);
            $model=D('Plugin');

            if($model->create())
            {
                $model->guid=$guid;
                $model->uploadtime=date('Y-m-d H:i:s',time());
//                $support=I('post.support');
//                $sustr="";
//                foreach($support as $value){
//                    $sustr .= $value . "&nbsp;&nbsp;";
//                }
//                $model->support=$sustr;
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
        $gamelist=C('GAME_LIST');
        $wot_version=C('PLUGIN_VERSION');
        $data=M('Category')->select();
        $this->assign('wv',$wot_version['wt']);
        $this->assign('gamelist',$gamelist);
        $this->assign('data',$data);
        $this->display();
    }
    
    public function edit($id){
        $model=D('Plugin');
        $data=$model->where("id=$id")->find();
        if(IS_POST){
            
            $guid=  $data['guid'];
            uploadimg($guid);

            if($model->create())
            {
                $model->uploadtime=date('Y-m-d H:i:s',time());
//                $support=I('post.support');
//                $sustr="";
//                foreach($support as $value){
//                    $sustr .= $value . "&nbsp;&nbsp;";
//                }
//                $model->support=$sustr;
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
        
        $this->assign('data',$data);
        $cate=M('Category')->select();
        $gamelist=C('GAME_LIST');
        $this->assign('cate',$cate);
        $this->assign('gamelist',$gamelist);
        $this->display();
    }
    
    public function lst(){
        $model=D('Plugin');
        $data=$model->search();//返回了return array(                'show'=>$show,                'list'=>$list            );
        $cate=M('Category')->select();
        $gamelist=C('GAME_LIST');
        $this->assign(array(
            'page'=>$data['page'],
            'data'=>$data['data'],
            'gamelist'=>$gamelist,
            'cate'=>$cate
        ));
        
        $this->display();
    }
    
    public function delete($id){
        $data=M('Plugin')->where("id=$id")->find();

        M('Plugin')->delete($id);
        if($data)
        {
            unlink('PlugImage/'.$data['guid'].".jpg");
            unlink('PlugZip/'.$data['guid'].".zip");
        }
        $this->success('删除成功' );
    }
    
     public function bdel(){
        $delid=I('post.delid');
        //批量显示
        if(I('post.show'))
        {
            if($delid){
                $where['id'] = array('in',$delid);
                $data['status'] = 1;
                M('Plugin')->where($where)->data($data)->save();

            }
            $this->success('批量显示成功！' );
        }else if(I('post.hidd')){//隐藏
            if($delid){
                $where['id'] = array('in',$delid);
                $data['status'] = 0;
                M('Plugin')->where($where)->data($data)->save();
                $this->success('批量隐藏成功！' );
            }

        }
     }
    
    
}
