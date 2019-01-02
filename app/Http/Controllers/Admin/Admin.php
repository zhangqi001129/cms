<?php
/**
 * Created by PhpStorm.
 * User: 张琦
 * Date: 2018/12/29
 * Time: 上午 10:11
 */

namespace App\Http\Controllers\Admin;
use Illuminate\Routing\Controller;
use App\Model\UserModel;
class Admin extends Controller
{
    public function user($id){
       echo 'ID:'.$id;
       echo __METHOD__;
       $user=UserModel::where(['u_id'=>$id])->first()->toArray();
       echo '<pre>';print_r($user);echo '</pre>';
    }
    /* 添加*/
    public function add(){
        $data=[
            'username'=>'素素',
            'pwd'=>'123456'
        ];
        UserModel::insert($data);
    }
    /* 删除*/
    public function del($id){
        UserModel::where(['u_id'=>$id])->delete();
    }
    /*修改*/
    public function up($id){
        $data=[
            'username'=>'素素',
            'pwd'=>'123456'
        ];
        UserModel::where(['u_id'=>$id])->update($data);
    }
    /*展示*/
    public function show(){
        $data=UserModel::all();
        $list=[
            'data'=>$data
        ];
        return view('Admin/show',$list);
    }
}