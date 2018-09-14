<?php
namespace app\news\controller;

use think\Controller;

class Before extends Controller
{
    protected $beforeActionList = [
        'first',
        'second' => ['except' => 'hello'],
        'three' => ['only' => 'hello,data'],
    ];
    public function first()
    {
        echo 'First Action ';
    }
    public function second()
    {
        echo 'Second Action ';
    }
    public function three()
    {
        echo 'Three Action ';
    }
    public function hello()
    {
        return 'hello ';
    }
    public function data()
    {
        return 'data ';
    }
}