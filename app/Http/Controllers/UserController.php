<?php

    namespace App\Http\Controllers;

    use App\Http\Requests\UserUpdateRequest;
    use App\User;
    use App\UserDetail;


    class UserController extends Controller {


        public function user_update($id) {

            $user = User::with('userDetail')->where('id', $id)->first();
            return view("update_update")->with(["user" => $user]);
        }


        public function user_update_post(UserUpdateRequest $request, $id) {
            $inputs = $request->input();

            //dd($inputs);

            $firstName = $inputs["first_name"];
            $lastName = $inputs["last_name"];
            $age = $inputs["age"];
            $address = $inputs["address"];


            //$user = new user();

            $user = User::where('id', $id)->first();

            $user->first_name = $firstName;
            $user->last_name = $lastName;
            $user->save();

            $userDetail = UserDetail::firstOrCreate(
                [
                    'user_id' => $id],
                [
                    'age' => $age,
                    'address' => $address
                ]);


        }
    }
