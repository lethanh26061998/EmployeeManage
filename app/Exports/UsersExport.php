<?php

namespace App\Exports;

use App\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Support\Facades\Auth;


class UsersExport implements FromView
{

    public function view(): View
    {
        $user_id = Auth::user()->id;
        $users = User::find($user_id);

        foreach ($users->phongbans as $phongban) {

            $chuc_vu =  $phongban->pivot->chuc_vu;
            // $name_phongban =  $phongban->name_phongban;
        }

        if($chuc_vu == "Trưởng phòng") {
           $users = $phongban->users;
           return view('excel')->with('users', $users);

        }
        else {
            return view('layouts.profile');
        }

    }
}
