<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    function getUser(Request $request){
        // for validation
        $request->validate([
            "userName"=>"required",
        ]);
        if(View::exists('user-info')){
            return view('user-info', ['userName'=>$request->userName, 'userEmail'=>$request->userEmail]);
        }else{
            echo "Page Not found";
        }
        // return view('user-info', ['userName'=>$request->userName, 'userEmail'=>$request->userEmail]);
    }

    function namedRoute(){
        // return redirect()->route('pup');
        // other method
        return to_route("pup");
    }
    function loginUser(Request $request){
        $request->validate([
            "userEmail"=>"required | email",
            "userPassword"=>"required"
        ]);
        return view("user-info",["msg"=>"success"]);
    }
    function getUsersList(){
        $usersList = DB::select('select * from users');
        return view("list-user",["userList"=>$usersList]);
    }
}
