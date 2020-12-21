<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function user()
    {
        $query = request('query');

        $posts = User::where("name", "like", "%$query%")->latest()->paginate(10);

        $master = User::where("name", "like", "%$query%")->latest()->paginate(40)->where('level', "master");
        $admin = User::where("name", "like", "%$query%")->latest()->paginate(40)->where('level', "admin");
        $all_users = User::where("name", "like", "%$query%")->latest()->paginate(40)->where('level', "user");
        return view('admin.user.index', [
            'master_users' => $master,
            'admin_users' => $admin,
            'users' => $all_users,
        ]);
    }
}
