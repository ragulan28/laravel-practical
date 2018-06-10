<?php

    namespace App\Http\Controllers;

    use App\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

    class LoginController extends Controller {

        public function index() {
            return view('login');
        }

        public function login_post(Request $request) {


            $validateData = $request->validate([
                'username' => 'required',
                'password' => 'required'
            ],[
                'username.required' => 'No username',
                'password.required' => 'No password'
            ]);


            $inputs = $request->input();

            $username = $inputs["username"];
            $password = $inputs["password"];

            $user = new user();
            $user->username = $username;
            $user->password = bcrypt($password);

            if (Auth::attempt(['username' => $username, 'password' => $password])) {
                return redirect('/home');
            } else {
                return redirect('/logina');
            }


        }
    }
