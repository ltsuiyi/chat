<?php
namespace app\index\controller;

use app\BaseController;
use think\facade\Db;
use think\facade\View;

class Index extends BaseController
{
    public function index()
    {

        $fromid = input('fromid');
        $toid = input('toid');

        View::assign([
            'fromid'=>$fromid,
            'toid'=>$toid
        ]);
         return View::fetch();

    }


    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
}
