<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;




class AuthController extends Controller
{


    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $rules =  [
            'email' => 'required|string',
            'password' => 'required|string|min:6'
        ];

        $message = [
            'required' => ':attribute tidak boleh kosong',
            'min' => ':attribute minimal :min',
        ];

        $this->validate($request, $rules, $message);

        $credential = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::guard('store')->attempt($credential, $request->remember)){
            return redirect()->intended(route('food.index'));
        }

        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout()
    {
        Auth::guard('store')->logout();
        return redirect()->route('store.login');
    }

}
