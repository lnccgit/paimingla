<?php
/**
 * Created by PhpStorm.
 * User: 管理员
 * Date: 2017/11/1
 * Time: 15:53
 */

namespace app\paiming\controller;


use think\Controller;

class Sales extends Controller
{

    /**
     * 修改密码
     * @param $data
     */
    public function index(){
        if(request()->isPost()){
            $data=input('post.');
            if($data['pass']!=$data['respass']){
                return $this->error('密码不一致');
            }
            $update = [
                'password' => md5($data['pass'])
            ];
            $result = db('sales')->where(["name" => $data['name']])->update($update);
            if ($result) {
                $this->success('修改成功', 'paiming/index/index');
            } else {
                $this->error('您没有做任何修改');
            }
           // halt($data);sdlf
        }
        return $this->fetch();
    }

}
