<?php

namespace app\news\controller;

use think\Request;

class Requ extends Request
{
    public function index()
    {
        $request = Request::instance();
        $request = request();
       if($request -> has('id','get'))
       {
           echo 'OK';
       }else
       {
           echo 'No';
       }
       echo $request -> server('PHP_SELF');
    //    dump($request -> server());
       dump(input('server.'));
       dump(input('cookie.'));
    }
    public function gets()
    {
        // echo Request::instance() -> get('id');
        // echo input('put.name');
        echo input('?get.id');
    }
    public function Send()
    {
        $request = Request::instance();
        $request = request();
        if($request -> isGet())
        {
            echo '当前为 GET 请求';
        }elseif($request -> isPost())
        {
            echo '当前为 POST 请求 ';
        }elseif($request -> isPut())
        {
            echo '当前为 PUT 请求 ';
        }elseif($request -> isDelete())
        {
            echo '当前为 DELETE 请求';   
        }elseif($request -> isAjax())
        {
            echo '当前为 AJAX 请求 ';
        }elseif($request -> isPjax())
        {
            echo '当前为 PJAX 请求';
        }elseif($request -> isMobile())
        {
            echo '当前为 MOBILE 请求';
        }elseif($request -> isHead())
        {
            echo '当前为 HEAD 请求';
        }elseif($request -> isPatch())
        {
            echo '当前为 PATCH 请求';
        }elseif($request -> isOptions())
        {
            echo '当前为 OPTIONS 请求';
        }else
        {
            echo 'don\'t know';
        }
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method='post'>
        <input type="text" name='name' value='Send Your message '>
        <input type="hidden" name='_method' value='delete'>
        <input type="submit" value="Send ">
    </form>
</body>
</html>