<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Redis;

class LogController extends Controller
{

    /**
     * Показать профиль конкретного пользователя.
     *
     * @param  int  $id
     * @return array
     */
    public function show($id)
    {
        return ['user' => Redis::get('user:profile:'.$id)];
    }

    public function set(FormRequest $request){
        Redis::lpush('user:'.$request['id'], $request['name']."asdasd");
        $values = Redis::lrange('user:1', 0, -1);
        return $values;
    }
}
