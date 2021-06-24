<?php


namespace app\api\controller;


use app\BaseController;
use think\facade\Db;

class Chat extends BaseController
{

    public function addContent()
    {
        $param = input('post.');

        $data = [
            'fromid'=>$param['fromid'],
            'fromname'=>$this->getName($param['fromid']),
            'toid'=>$param['toid'],
            'toname'=>$this->getName($param['toid']),
            'content'=>$param['data'],
            'isread'=>$param['isread'],
            'time'=>$param['time'],
            'type'=>1,
        ];

        Db::name('chat_communication')->insert($data);

    }


    public function getName($id)
    {
        $info = Db::name('chat_user')->where('id',$id)->value('nickname');
        return $info;

    }
}