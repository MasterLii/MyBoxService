<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Home\Model;
use Think\Model;
class AdminModel extends Model{
        protected $tableName = 'Admin';
    
        protected $_validate = array(
            array('username', 'require', '用户名不能为空！', 1),
            // 只有添加时生效
            array('password', 'require', '密码不能为空！', 1, 'regex', 1),
            array('password', 'require', '密码不能为空！', 1, 'regex', 4),
            // 用户名在数据库中必须是唯一的: 在添加和修改时执行这个验证
            array('username', '', '用户名已经存在！', 1, 'unique', 1),
            array('username', '', '用户名已经存在！', 1, 'unique', 2),
            array('discount',array(1,2,3,4,5,6,7,8,9,10),'折扣范围1~10！',2,'in'),
            array('chk_code', '_chkCode', '验证码不正确！', 1, 'callback', 4),

         );
        
      public function login() {
        // 当前调用find方法之后tp会把数据库的记录赋给这个模型，所以需要在调用find之前先从模型中取出表单中的密码
        $password = $this->password;
        // 根据用户名查询数据库看有没有这个账号
        // 相当于：SELECT * FROM sh_member WHERE username='xxx' LIMIT 1
        // find:返回一维数组
        $info = $this->where("username='$this->username'")->find();
        if ($info) {
            // 再比较密码是否正确
            if ($info['password'] == $password) {
                // 登录成功把ID和用户名存到SESSION中
                if($info['status']==0)
                {
                    return "您的账号被封禁！";
                }
                session('id', $info['id']);
                session('username', $info['username']);
                session('action', $info['action']);
                if($info['action']==2)
                {
                    return 2;
                }
                return TRUE;
            } else
                return "密码不正确！";
        } else
            return "用户不存在！";
    }
    
    protected function _chkCode($code)
    {
            $verify = new \Think\Verify();
            return $verify->check($code, '');
    }
    
   public function logout(){
         session('id',null);
         session('username', null);
         session('action', null);
    }
    
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
                    'data' => $this->where($where)->limit($page->firstRow, $page->listRows)->order('id desc')->select(),
                    'page' => $page->show(), // 翻页的字符串
            );
    }

}
