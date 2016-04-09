<?php 

namespace Home\Model;
use Think\Model\RelationModel;
class PluginModel extends RelationModel{
    
    protected $_validate = array(
    
            array( 'name' , 'require' ,'插件名称不能为空！' , '1' ),
            array( 'remark' , 'require' ,'插件描述不能为空！' , '1' ),
            array( 'edition' , 'require' ,'版本不能为空！' , '1' ),
            array( 'status' , 'require' ,'状态不能为空！' , '1' ),
            array( 'cid' , 'require' ,'分类不能为空！' , '1' ),
    );
    
    protected $_link=array(
        'Category'=>array(
            'mapping_type'=>self::BELONGS_TO,
            'mapping_name'=>'cate',
            'mapping_fields'=>'name',
            'class_name'=>'Category',
            'foreign_key'=>'cid',
            "parent_key" => 'id'
        )            
    );
    
    public function search()
    {
            $where = 1;
            // 每页的条数
             if(($search=I('get.search')) && !ctype_space($search))
            {
                $where.=' and name like "%'.$search.'%"';
            }
            if(($cid=I('get.category')) && $cid!="-1")
            {
                $where.=" and cid =$cid";
            }
            if(($gid=I('get.gid')) && $gid!="-1")
            {
                $where.=" and gid =$gid";
            }
            if(($status=I('get.status')) && $status!="-1")
            {
                if($status==2)
                {
                    $status=0;
                }
                $where.=" and status =$status";
            }

            
            $perpage = 15;
            // 获取总的记录数
            $totalRecord = $this->where($where)->count();
            // 生成翻页的对象
            $page = new \Think\Page($totalRecord, $perpage);
            return array(
                    'data' => $this->relation(true)->order('id desc')->where($where)->limit($page->firstRow, $page->listRows)->select(),
                    'page' => $page->show(), // 翻页的字符串
            );
    }
}