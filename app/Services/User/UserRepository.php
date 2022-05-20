<?php

namespace App\Services\User;

use App\Models\User;

class UserRepository implements UserInterface
{

    public function indexView()
    {
        $users = User::all();
        return view('users')->with('users', $users);
    }

    public function addUser($data)
    {
        $user = new User();

        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = $data['password'];

        $user->save();
        return back();
    }
}
