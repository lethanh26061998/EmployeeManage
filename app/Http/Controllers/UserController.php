<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\PhongBan;
use App\PhongBan_User;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Session;

class UserController extends Controller
{

    // in ra danh sách user
    public function printlistUser(){

        $users = User::where('level', false)->paginate(4);

        return view('employee')->with('users', $users);
    }

    //
    public function create(){

        $phongbans = PhongBan::all();
        return view('addaccount', compact('phongbans'));
    }
    // action để lưu mỗi khi submit
    public function store(Request $request){

        $name = $request->name;
        $password = $request->password;
        $email = $request->email;
        $age = $request->age;
        $chuc_vu = $request->chuc_vu;
        $phongban_id = $request->phongban_id;

        $objUser = new User();
        $objUser->name = $name;
        $objUser->password = bcrypt($password);
        $objUser->email = $email;
        $objUser->age = $age;
        $objUser->save();

        $user_id = $objUser->id;

        $objPhongBan_User = new PhongBan_User();
        $objPhongBan_User->user_id = $user_id;
        $objPhongBan_User->chuc_vu = $chuc_vu;
        $objPhongBan_User->phongban_id = $phongban_id;
        $objPhongBan_User->save();

        session()->flash('Tạo thành công', 'Tạo tài khoản thành công!');
        Mail::send('mail_addacount', array('name'=> $objUser->name,'email'=> $objUser->email, 'password'=> $password), function($message) use($objUser){
            $message->to($objUser->email)->subject('Notification Mail!');
        });

        return redirect()->action('UserController@printlistUser');
    }

    // sửa thông tin user
    public function editUser($id){

        $getUserById = User::find($id);
        $users = User::all();
        $phongbans = PhongBan::all();
        return view('editUser', compact('getUserById', 'users', 'phongbans'));
    }

    // update thông tin user sau khi sửa
    public function updateUser(Request $request){

        $id = $request->id;
        $name = $request->name;
        $age = $request->age;
        $chuc_vu = $request->chuc_vu;
        $phongban_id = $request->phongban_id;

        $user = new User();
        $objUser = $user->find($id);
        $objUser->name = $name;
        $objUser->age = $age;
        $objUser->save();

        $phongban_user = new PhongBan_User();
        $user_id = $id;
        $objPhongBan_User = $phongban_user->find($user_id);
        $objPhongBan_User->chuc_vu = $chuc_vu;
        $objPhongBan_User->phongban_id = $phongban_id;
        $objPhongBan_User->save();

        session()->flash('Sửa thành công', ' Đã sửa nhân viên thành công!');

        return redirect()->action('UserController@printlistUser');
    }

    public function deleteUser($id){

        $user = new User();
        $objUser = $user->find($id);
        $user_id = $id;

        $phongban_user = new PhongBan_User();
        $user_id = $id;
        $objPhongBan_User = $phongban_user->find($user_id);
        $objPhongBan_User->delete();
        $objUser->delete();

        session()->flash('Xóa thành công', ' Đã xóa nhân viên thành công!');

        return redirect()->action('UserController@printlistUser');

    }

    public function updatepw(Request $request){

            foreach($request->resetpw as $reset_id){
                $user = User::find($reset_id);
                $password ='matkhau';
                $user->password = bcrypt($password);
                $user->save();

                Mail::send('mail_reset', array('name'=> $user->name,'email'=> $user->email, 'password'=> $password), function($message) use($user){
                    $message->to($user->email)->subject('Notification Mail!');
                });
                 session()->flash('mail_message', 'Đã gửi thông báo reset mật khẩu tới mail nhân viên!');


            }
            session()->flash('Reset pw thành công', ' Đã reset mật khẩu nhân viên thành công!');



            return redirect('admin');




    }

}
