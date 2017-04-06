<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * 文章列表首页
     *
     * @return response
     **/
    public function index()
    {
        return 'posts index page.';
    }

    /**
     * 文章展示页面
     *
     * @return response
     **/
    public function show($id)
    {
        return 'post show, id:'.$id;
    }
}
