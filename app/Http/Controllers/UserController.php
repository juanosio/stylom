<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function store(Request $request){


        $user = new User;

        $user->email            = $request->email;
        $user->password         = bcrypt($request->password);
        $user->name             = $request->name;
        $user->lastname         = $request->lastname;
        $user->identification   = $request->identification;
        $user->telephone        = $request->telephone;
        $user->role             = 'CLIENTE';
$user->save();

return redirect()->route('login');


    }
}
