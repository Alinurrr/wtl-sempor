<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $master = User::latest()->paginate(40)->where('level', "master");
        $admin = User::latest()->paginate(40)->where('level', "admin");
        $all_users = User::latest()->paginate(40)->where('level', "user");
        return view('admin.user.index', [
            'master_users' => $master,
            'admin_users' => $admin,
            'users' => $all_users,
        ]);
    }
}
