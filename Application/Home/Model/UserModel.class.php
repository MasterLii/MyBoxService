<?php 

namespace Home\Model;
use Think\Model;
class UserModel extends Model{
    
       protected $_validate = array(
            array('username', 'require', '用户名不能为空！', 1),
            // 只有添加时生效
            array('password', 'require', '密码不能为空！', 1, 'regex', 1),
           array('username','6,32','用户名长度要大于6位，小于32位',1,'length',1),
            array('password','6,32','密码长度要要大于6位，小于32位',1,'length',1),
            array('email', 'require', '安全邮箱不能为空！', 1, 'regex', 1),
            array('email','email','email格式错误'),
            // 用户名在数据库中必须是唯一的: 在添加和修改时执行这个验证
            array('username', '', '用户名已经存在！', 1, 'unique', 1)

    );
    
    public  function search(){

        $where=1;

        if(($search=I('get.search')) && !ctype_space($search))
        {
            $where.=' and username like "%'.$search.'%"';
        }

        $pageSize=15;
        $count=$this->where($where)->count();
        $Page       = new \Think\Page($count,$pageSize);
        $show       = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $this->where($where)->limit($Page->firstRow.','.$Page->listRows)->order('id desc')->select();


        return array(
            'page'=>$show,
            'data'=>$list
        );
    }
}