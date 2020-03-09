<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class TestController extends Controller
{
    public function redis1(){
        $key="123";
        $val="hello php";
        Redis::set($key,$val);
        echo "set 成功";echo "<br>";
    }

    public function redis2(){
        $key="123";
        $val=Redis::get($key);
        echo "val:".$val;
    }
}
