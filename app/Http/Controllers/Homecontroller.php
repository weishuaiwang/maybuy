<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    /**
     * 商城首页
     *
     * @return response
     **/
    public function index()
    {
        return 'hello laravel.';
    }
}
