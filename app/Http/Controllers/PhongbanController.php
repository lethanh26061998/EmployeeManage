<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\PhongBan;
use App\PhongBan_User;
use Illuminate\Support\Facades\Auth;
use DB;

class PhongbanController extends Controller
{
    //

    public function printlistPhongban(){

        $phongbans = PhongBan::paginate(5);

        return view('phongban')->with('phongbans', $phongbans);

    }

    public function create(){

        $phongbans = PhongBan::all();
        return view('addphongban', compact('phongbans'));
    }
    // action để lưu mỗi khi submit
    public function store(Request $request){

        $name_phongban = $request->name_phongban;
        $objPhongban = new PhongBan();
        $objPhongban->name_phongban = $name_phongban;
        $objPhongban->save();
        return  redirect()->action('PhongbanController@printlistPhongban');
    }

    public function editPhongban($id){
        $phongban = PhongBan::find($id);
        return view('editphongban')->with('phongban', $phongban);
    }

    public function updatePhongban(Request $request){

        $id = $request->id;
        $name_phongban = $request->name_phongban;

        $objPhongban = PhongBan::find($id);
        $objPhongban->name_phongban = $name_phongban;
        $objPhongban->save();

        return redirect()->action('PhongbanController@printlistPhongban');
    }

    public function deletePhongban($id){

        $phongban = PhongBan::find($id);

        $phongban_users = PhongBan_User::where('phongban_id', '=', $id)
                                    ->get();

        foreach($phongban_users as $phongban_user){
            $user_id = $phongban_user->user_id;
            $user = User::find($user_id);
            $phongban_user->delete();
            $user->delete();

        }
        $phongban->delete();
        return redirect()->action('PhongbanController@printlistPhongban');
    }

}
