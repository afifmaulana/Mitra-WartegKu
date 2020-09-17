<?php

namespace App\Http\Controllers\Store\Auth;

use App\Store;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    //use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:store');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request){
//        $this->validate($request, [
//           'name'       => 'required',
//           'email'      => 'required|unique:super_admins|email',
//            'password'  => 'required|confirmed'
//        ]);

        $data = new Store();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        if ($data->save()){
            return redirect()->route('store.login');
        }else{
            return back()->withErrors();
        }

    }

}
