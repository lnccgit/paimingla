<?php
namespace app\common\controller;
use think\Controller;
/**
 * 基类控制器
 */
class Zhihuo extends Controller{
	/**
	 * 初始化方法
	 */
	public function _initialize(){
		parent::_initialize();
        if(empty(session('admin')['id'])){
           $this->error('请先登录系统','paiming/login/login');
       }
        
	}



}

