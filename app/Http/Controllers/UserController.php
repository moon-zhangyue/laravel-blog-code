<?php
/**
 * Created by PhpStorm.
 * Author: SpiRit-Moon
 * Time: 2019/1/24 18:29
 * Module: UserController.php
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * 显示指定用户属性
     *
     * @param  int $id
     * @return Response
     * @translator laravelacademy.org
     */
    public function showProfile($id)
    {
//        $user = Redis::get('user:profile:' . $id);
//        return view('user.profile', ['user' => $user]);
    }
}