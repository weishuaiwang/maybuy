<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    /**
     * 平台首页
     *
     * @return response
     **/
    public function index(Request $request)
    {
        return '平台首页';
    }
}
