<?php 

namespace Home\Model;
use Think\Model\RelationModel;

class CardModel extends RelationModel{
    
    protected $_validate = array(
            
            array( 'code' , 'require' ,'充值卡号不能为空！' , '1' ),
            array( 'valuetime' , 'require' ,'充值时间不能为空！' , '1' ),

    );
    
    protected $_link=array(
        'Admin'=>array(
            'mapping_type'=>self::BELONGS_TO,
            'mapping_name'=>'creater',
            'mapping_fields'=>'username',
            'class_name'=>'Admin',
            'foreign_key'=>'createrid',
            "parent_key" => 'id'
        ),
        
        'User'=>array(
            'mapping_type'=>self::BELONGS_TO,
            'mapping_name'=>'user',
            'mapping_fields'=>'username',
            'class_name'=>'User',
            'foreign_key'=>'userid',
            "parent_key" => 'id'
        )      
    );
    
    public function search()
    {
            $where = 1;
            // 每页的条数
            $perpage = 50;
            // 获取总的记录数
            if(($search=I('get.search')) && !ctype_space($search))
            {
                $where.=' and code like "%'.$search.'%"';
            }
            if(($start_time=I('get.start_time')) && !ctype_space($start_time))
            {
                $where.=" and createtime >='$start_time'";
            }
            if(($end_time=I('get.end_time')) && !ctype_space($end_time))
            {
                $where.=" and createtime <='$end_time'";
            }
            $action=session('action');
            if($action!=1)
            {
                $id=session('id');
                $where.=" and createrid =$id";
            }
            
            $totalRecord = $this->where($where)->count();
            // 生成翻页的对象
            $page = new \Think\Page($totalRecord, $perpage);
            return array(
                    'data' => $this->relation(true)->order('id desc') ->where($where)->limit($page->firstRow, $page->listRows)->select(),
                    'page' => $page->show(), // 翻页的字符串
            );
    }
}