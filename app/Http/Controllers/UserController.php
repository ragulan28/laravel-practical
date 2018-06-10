<?php

    namespace App\Http\Controllers;

    use App\User;
    use Illuminate\Http\Request;


    class UserController extends Controller {


        public function user_update($id) {

            $user = User::with('userDetail')->where('id', $id)->first();
            return view("update_update")->with(["user" => $user]);
        }


        public function user_update_post(Request $request, $id) {
            $inputs = $request->input();

            dd($inputs);

            $firstName = $inputs["first_name"];
            $lastName = $inputs["last_name"];
            $age = $inputs["age"];
            $address = $inputs["address"];


            $user = new user();
            $user->first_name = $firstName;
            $user->last_name = $lastName;
//            $user['userDetail']['age']=$age;
//            $user['userDetail']['age']=$age;
            $user->userDetail->age = $age;
            $user->userDetail->address = $address;
            $result = $user->where('id', $id)
                            ->update();

            dd($result);

        }
    }
