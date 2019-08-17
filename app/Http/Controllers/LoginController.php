<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;
use App\User;
class LoginController extends Controller
{
    public function getLogin() {
    	return view('login');
	}

    public function postLogin(Request $request) {
    	$rules = [
            'email' => 'required',
    		'password' => 'required|min:6'
    	];
    	$messages = [
            'email.required' => 'Tên đăng nhập là trường bắt buộc',
    		'password.required' => 'Mật khẩu là trường bắt buộc',
    		'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
    	];
    	$validator = Validator::make($request->all(), $rules, $messages);
    	if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {

            $email = $request->input('email');
            $password = $request->input('password');

    		if( Auth::attempt(['email' => $email, 'password' => $password])) {
				if( Auth::user()->check == 0){
                    // return redirect('changepw');
                    return redirect()->route('resetpw');
				}
				else if( Auth::user()->check == 1){
                    if (Auth::user()->level == 1) {
                        return redirect('admin');
                    }
                    else if(Auth::user()->level == 0) {
                        return redirect('/profile');
                    }
                }

    		} else {
    			$errors = new MessageBag(['errorlogin' => 'Tên đăng nhập hoặc mật khẩu không đúng!']);
				return redirect()->back()->withInput()->withErrors($errors);
    		}
    	}
	}

	public function getLogout() {
        Auth::logout();
        return redirect()->route('login');
     }
}
