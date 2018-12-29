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
}