<?php
namespace app\news\controller;

use think\Controller;
use app\news\model\User;

class Redirect extends Controller
{
    public function _empty()
    {
        return $this -> showCity($name);
    }
    protected function showCity($name)
    {
        return 'City is '.$name;
    }
    public function index()
    {
        $user = new User;
        $result = $user -> save();
        if($result)
        {
            $this -> success('Add Success ! ','User/list');
        }else
        {
            $this -> error('Sorry ');
        }
    }
}