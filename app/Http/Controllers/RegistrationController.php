<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function form(){
        return view('registration');
    }

    public function registration_post(Request $request) {
        $inputs=$request->input();
        $firstName = $inputs["first_name"];
        $lastName = $inputs["last_name"];
        $username = $inputs["username"];
        $password = $inputs["password"];

        $user = new user();
        $user->first_name = $firstName;
        $user->last_name = $lastName;
        $user->username = $username;
        $user->password = bcrypt ($password);

        $result = $user->save();

        if($result){
            return "sucess";
        }
        else{
            return "fail";
        }


    }
}
