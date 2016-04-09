<?php 

namespace Home\Controller;
use Think\Controller;
class CardController extends Controller{
    public function __construct() {
        parent::__construct();
        if(!session('id'))
        {
            $this->error('必须先登录！', U('Home/Login/login'),1);
        }
    }
    public function add(){
        
        if(IS_POST){
            
            $model=D('Card');           
            $count=I("post.count");
            $count=(int)$count;
            $prefix=I("post.prefix");
            $valuetime=I("post.valuetime");
            $gameid=I("post.gameid");
            if($count==""||$prefix==""||$valuetime=="")
            {
                $this->error('制作失败！您输入的信息有误！');
            }
            if(strlen($prefix)>5)
            {
                $this->error('制作失败！卡前缀太长了！');
            }
            $prefix=strtoupper($prefix);
            //-------------------------------------------
            $userModel=D('Admin');
            $uid=session('id');
            $user=$userModel->where("id='$uid'")->find();
            $card_price=C('CARD_PRICE');
            $needmoney=((int)$user['discount'])*$card_price[$valuetime]*0.1*$count;

            if($needmoney>(float)$user['money'])
            {
                $this->error('您的余额不足请联系管理员充值！');
            }
            $user['money']=(float)$user['money']-$needmoney;
            $userModel->save($user);
            //------------------------------------------
            $cardlist= createcard($count,16,$prefix);            
            foreach ($cardlist as $value) {
                $card= M("Card"); 
                // 然后直接给数据对象赋值
                $card->code = $value;
                $card->valuetime = $valuetime;
                $card->createtime=date('Y-m-d H:i:s',time());
                $card->createrid=$uid;
                $card->gameid=$gameid;
                // 把数据对象添加到数据库
                $card->add();
            }
            
            $this->success('添加完毕', U('lst') );
            

        }

        $this->display();
    }
    
    public function edit($id){
        $model=D('Card');
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
        $model=D('Card');
        $data=$model->search();//返回了return array(                'show'=>$show,                'list'=>$list            );

        $this->assign(array(
            'page'=>$data['page'],
            'data'=>$data['data']
        ));
        
        $this->display();
    }
    
    public function delete($id){
    
        M('Card')->delete($id);

        $this->success('删除成功' );
    }
    
    public function bdel(){
        $delid=I('post.delid');
        header("Content-type: text/html; charset=utf-8"); 

        if(I('post.del'))
        {
            if($delid){
                $where=array();
                $action=session('action');
                if($action!=1)
                {
                    $id=session('id');
                    $where[]=array('createrid'=>$id);
                    
                }
                $where[]=array('id'=>array('in',$delid));

                M('Card')->where($where)->delete();

            }
            $this->success('删除成功' );
        }else if(I('post.getfile')){
            if($delid){
                $delid=implode(',' , $delid);
                
                $action=session('action');
                if($action!=1)
                {
                    $id=session('id');
                    $map['createrid'] =$id;
                }
                
                $map['id'] =array ('in',$delid);
                $data=M('Card')->where($map)->select();
                $str="卡号,时间,制作时间\r\n";
                
                foreach($data as $value)
                {
                    $str .= $value['code'] . "," .$value['valuetime'] ."," .  $value['createtime'] . "\r\n";
                }
                $filename="卡密" . date('Y-m-d H:i:s',time()) . ".csv";
                
                Header( "Content-type:   application/octet-stream "); 
                Header( "Accept-Ranges:   bytes "); 
                header( "Content-Disposition:   attachment;   filename=$filename "); 
                header( "Expires:   0 "); 
                header( "Cache-Control:   must-revalidate,   post-check=0,   pre-check=0 "); 
                header( "Pragma:   public "); 
                echo $str;
            }

        }

    }
   
    
}
