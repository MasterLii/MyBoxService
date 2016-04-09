
namespace <?php echo $moduleName; ?>\Model;
use Think\Model;
class <?php echo $mvcName; ?>Model extends Model{
    
    protected $_validate = array(
    
<?php 
            foreach ($fields as $k => $v) {
                    if($v['key'] == 'PRI')
                            continue ;
                    if($v['null'] == 'NO' && $v['default'] == null){
                        echo "            array( '".$v['field']."' , 'require' ,'".$v['comment']."不能为空！' , '1' ),\r\n";
                    }
                    
            }
            ?>
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