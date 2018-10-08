<?php

namespace App\Http\Controllers;
use  App\Http\Controllers\Controller;
use App\Jobs\SendEmail;
use App\Jobs\ticketTest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Redis;



class IndexController extends Controller
{
    function test(){
       //$user = DB::select('select  * from user');
       //dd($user);
       /* Redis::set('name','zhengweizhao');
        dd(Redis::get('name'));*/
        /*dispatch(new ticketTest());//推送任务
        echo "郑伟钊是广东吴彦祖";*/
        //$user = DB::select('select  * from user');

       /* $start_time = time();
        for($i = 0;$i <9999 ;$i++){
            $users = Redis::get('users');
            if($users){
               file_put_contents('redistest.txt',$users);
            }else{
                $users = DB::select('select  * from user');
                $users = json_encode($users);
                Redis::set('users',$users);
                file_put_contents('redistest.txt',$users);
            }
        }
        dd(time()-$start_time);*/





        dd('大家好  我是广州吴彦祖');
        ticketTest::dispatch()->onConnection('redis');




    }

    function testdb(){
        $start_time = time();
        for($i = 0;$i <9999 ;$i++) {
            $users = DB::select('select  * from user');
            $users = json_encode($users);
            file_put_contents('dbtest.txt', $users);
        }
        dd(time()-$start_time);
    }



    function user(Request $request){
        echo "大家好 我是渣渣辉";
        echo url()->previous();
        dd($request->name);
    }



    public function queue(){
           dispatch(new  SendEmail('327569753@qq.com'));

    }



}
