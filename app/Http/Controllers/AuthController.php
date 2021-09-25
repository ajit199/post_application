<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{

    public function userlogin(Request $request)
    {

        $email = $request->input('email');
        $password = $request->input('password');
        $user = User::where(['email' => $email])->first();

        if ($user && Hash::check($password, $user->password)) {
            $request->session()->put('loggedInUser', $user);
            return redirect('/');
        } else {
            return redirect()->back()->with('error', 'Invalid Credentials')->withInput($request->only('email'));
        }
    }

    public function signup(Request $request)
    {
        $userData = new User;
        $userData->name = $request->name;
        $userData->email = $request->email;
        $userData->password = bcrypt($request->password);
        $userData->save();
        return redirect('/login');
    }

    public function logout()
    {
        session()->forget('loggedInUser');
        return redirect('/');
    }
}
