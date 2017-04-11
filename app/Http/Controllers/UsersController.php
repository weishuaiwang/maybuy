<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Posts;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::paginate(15);
        return view('test')->with('users', $users);
    }

    public function show($id)
    {
        dd( User::findOrFail($id)->password );
    }
}
