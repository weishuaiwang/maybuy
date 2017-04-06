<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoodsController extends Controller
{
    /**
     * 商品列表页面
     *
     * @return void
     * @author 
     **/
    public function index()
    {
        return '商品列表页面';
    }

    /**
     * 商品详情页面
     *
     * @return response
     **/
    public function show($id)
    {
        return '商品详情页面'.$id;
    }
}
