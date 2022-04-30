<?php

namespace App\Http\Controllers;

use App\Models\Meeting;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function register(Request $request) {
        // 一意のランダムな文字列を作成する
        $name = uniqid(bin2hex(random_bytes(1)));
        $password = Hash::make($request->get('password'));
        $meetings = new Meeting();
        $meetings->fill([
           'name'      => $name,
           'password' => $password,
        ]);
        $meetings->save();
        Auth::guard('web')->login($meetings, true);


    }

    public function login()
    {

    }

    public function check()
    {

    }
}
