<?php
namespace app\news\controller;

use think\View;

class Index
{
	public function hi()
	{
		return 'Hi ';
	}
	public function index()
	{
		$view = new View();
		return $view -> fetch('index');
	}
	public function view()
	{
		return view('view');
	}
	public function json()
	{
		return json_encode($data);
	}
	public function data()
	{
		return ['name' => 'thinkphp','status' => 1];
	}
}

