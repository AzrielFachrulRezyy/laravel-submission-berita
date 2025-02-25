<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile(User $user)
    {
        $posts = $user->posts()->paginate(5);

        return view('users.profile', [
            'user' => $user,
            'posts' => $posts,
        ]);
    }
}
