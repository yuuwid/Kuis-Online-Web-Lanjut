<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{

    public function index_login()
    {
        return render('admin.login.LoginAdmin');
    }

    public function login_req(Request $request)
    {
        $credentials = [
            'email' => "required",
            'password' => "required|min:6",
        ];
        $request->validate($credentials);

        $data = $request->only(['email', 'password']);

        if (Auth::guard('webadmin')->attempt($data)) {
            return redirect()->intended('/');
        } else {
            return redirect()->back()->with('flash_err', 'Email or Password Invalid !');
        }
    }
}
