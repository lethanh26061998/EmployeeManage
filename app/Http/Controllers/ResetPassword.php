<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use App\User;
use Validator;
use Illuminate\Support\Facades\Auth;
class ResetPassword extends Controller
{
    //
    public function show(){

        return view('resetpassword');
    }

    public function reset(Request $request){

        $rule = [
            'password' => 'required|min:6',
            'password_confirm' => 'required|same:password',

        ];

        $messages = [
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu chứa ít nhất 6 kí tự',
            'password_confirm.required' => 'Xác nhận mật khẩu là trường bắt buộc',
            'password_confirm.same' => 'Xác nhận mật khẩu sai',

        ];

        $validator = Validator::make($request->all(), $rule, $messages);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();

        }
        else {

            $password = $request->password;
            $password = bcrypt($password);

            $user = User::find(Auth::user()->id);
            $user->password = $password;
            $user->check = 1;

            $user->save();


            return redirect()->intended('login');
        }

    }


}
