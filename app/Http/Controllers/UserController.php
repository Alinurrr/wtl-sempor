<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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

    // edit level
    public function editlevel(User $user)
    {
        return view('admin.user.editlevel', [
            'user' => $user,
        ]);
    }

    public function updatelevel(User $user)
    {
        $attr = request()->validate([
            'level' => 'required',
        ]);

        // dd($attr);

        //update
        $user->update($attr);

        Alert::success('Level user telah diedit');
        return redirect()->route('user-show', $user->id);
        // return redirect()->to(route('product-admin'));
    }

    // edit profile
    public function edit(User $user)
    {
        return view('admin.user.edit', [
            'user' => $user,
        ]);
    }

    public function update(User $user)
    {
        $attr = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required|numeric',
            'gender' => '',
            'tanggal_lahir' => '',
        ]);

        // dd($attr);

        //update
        $user->update($attr);

        Alert::success('Profile user telah diedit');
        return redirect()->route('user-show', $user->id);
        // return redirect()->to(route('product-admin'));
    }

    public function show(User $user)
    {
        return view('admin.user.show', compact('user'));
    }
}
