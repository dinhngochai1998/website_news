<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController
{
    public function index() {
       $users = User::query()->get();

       return view('user', compact('users'));
    }

}
