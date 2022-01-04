<?php

namespace App\Http\Controllers;


use App\Models\Comment;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showUser(){
        $user = Auth::user();
        $episodes = $user->seen;
        $series = [];

        $comments = Comment::all()->where('validated',0);

        foreach ($episodes as $episode){
            if(!in_array($episode->serie,$series)){
                $series[]=$episode->serie;
            }
        }

        return view('profile',[
            'series'=>$series,
            'comments'=>$comments

        ]);
    }

    public function userLogin(){
        return view('auth.login');
    }

    public function userRegister(){
        return view('auth.register');
    }

}
