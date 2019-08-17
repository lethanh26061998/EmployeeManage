<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\PhongBan;
use App\PhongBan_User;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;

// use Maatwebsite\Excel\Concerns\FromCollection;

class EmployeeController extends Controller
{
    //

    public function getProfile()
    {

        $users = Auth::user();
        return view('getProfile')->with('users', $users);
    }

    public function editProfile()
    {
        $getUserById = Auth::user();
        $phongbans = PhongBan::all();
        return view('editProfile', compact('getUserById','phongbans'));
    }


    public function updateProfile(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $age = $request->age;
        // $chuc_vu = $request->chuc_vu;
        // $phongban_id = $request->phongban_id;

        $user = new User();
        $objUser = $user->find($id);
        $objUser->name = $name;
        $objUser->age = $age;
        $objUser->save();

        $phongban_user = new PhongBan_User();
        $user_id = $id;
        $objPhongBan_User = $phongban_user->find($user_id);
        // $objPhongBan_User->chuc_vu = $chuc_vu;
        // $objPhongBan_User->phongban_id = $phongban_id;
        $objPhongBan_User->save();

        session()->flash('Thành công', 'Cập nhật thông tin thành công!');

        return view('getProfile');
    }

    public function getEmployees()
    {
        $users = Auth::user();
        foreach ($users->phongbans as $phongban) {
            $chuc_vu =  $phongban->pivot->chuc_vu;
            // $name_phongban =  $phongban->name_phongban;
        }

        if($chuc_vu == "Trưởng phòng") {
           $users = $phongban->users;
           return view('employee_phongban')->with('users', $users);

        }
        else {
            session()->flash('Thất bại', 'Bạn không phải là trưởng phòng!');
            return redirect('profile');
        }
    }

    public function export()
    {
        return Excel::download(new UsersExport(), 'users.xlsx');
    }

}
