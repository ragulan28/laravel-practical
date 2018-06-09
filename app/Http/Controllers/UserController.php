<?php

    namespace App\Http\Controllers;

    use App\User;
    use App\UserDetail;
    use Illuminate\Http\Request;


    class UserController extends Controller {


        public function user_update($id) {

            $user = User::with('userDetail')->where('id', $id)->first();
            return view("update_update")->with(["user" => $user]);
        }


        public function user_update_post(Request $request, $id) {
            $inputs = $request->input();

            dd($inputs);
            // Not Complete Yet
        }
    }
