<?php
namespace app\news\controller;

use think\Controller;

class Index extends Controller
{
	public function _initialize()
	{
		echo 'init ';
	}
	public function hello()
	{
		return 'Hello';
	}
	public function data()
	{
		$data = ['name' => 'hale','age' => 23];
		return $data['name'];
	}
}