<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str; 

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
        return view("user-info",["msg"=>"success","message"=>"Login Successfull"]);
    }
    function getUsersList(){
        $usersList = DB::select('select * from users');
        return view("list-user",["userList"=>$usersList]);
    }
    function addUser(Request $request){
        $validatedData=$request->validate([
            "newUserName"=>"required|string|max:25",
            "newUserEmail"=>"required|email",
            "newUserPassword"=>"required"

        ]);
        $inserted=DB::table('users')->insert([
            'name' => $validatedData['newUserName'],
            'email' => $validatedData['newUserEmail'],
            'password' => bcrypt($validatedData['newUserPassword']),
            'email_verified_at' => null,  // Set email_verified_at as null (not verified)
            'remember_token' => Str::random(60), // Generate a random remember token
            'created_at' => now(),  // Automatically set created_at
            'updated_at' => now()   // Automatically set updated_at
        ]);
        if($inserted){
            return view("user-info",["msg"=>"success","message"=>"User Added Successfully"]);
        }
    
        return view("user-info",["msg"=>"error","message"=>"Error in adding user"]);
    }
}
