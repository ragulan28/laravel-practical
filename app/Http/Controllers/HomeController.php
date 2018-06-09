<?php

    namespace App\Http\Controllers;

    use App\User;

    class HomeController extends Controller {
        /**
         * Create a new controller instance.
         *
         * @return void
         */
        public function __construct() {
            $this->middleware('auth');
        }

        /**
         * Show the application dashboard.
         *
         * @return \Illuminate\Http\Response
         */
        public function index() {
            return view('home');
        }

        public function home() {
            $users = User::all();

            return view('home')->with(['user_data'=>$users]);
        }
    }
