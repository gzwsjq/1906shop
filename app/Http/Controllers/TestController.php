<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\DB;

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

    public function mysql1(){
        $data=DB::table('p_users')->first();
        var_dump($data);
    }
}
