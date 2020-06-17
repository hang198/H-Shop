<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    public function __construct()
    {

    }

    public function index()
    {
        $users = User::all();
        return view('admin.users.list',compact('users'));
    }
}
