<?php 

namespace Home\Model;
use Think\Model;
class CategoryModel extends Model{
    
    protected $_validate = array(
    
            array( 'name' , 'require' ,'分类名称不能为空！' , '1' ),
    );
    
    public function search()
    {
            $where = 1;
            // 每页的条数
            $perpage = 15;
            // 获取总的记录数
            $totalRecord = $this->where($where)->count();
            // 生成翻页的对象
            $page = new \Think\Page($totalRecord, $perpage);
            return array(
                    'data' => $this->where($where)->limit($page->firstRow, $page->listRows)->select(),
                    'page' => $page->show(), // 翻页的字符串
            );
    }
}