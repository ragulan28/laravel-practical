<?php

    use Illuminate\Database\Seeder;

    class UsersTableSeeder extends Seeder {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run() {
            DB::table('users')->insert([
                [
                    'first_name' => "ragulan",
                    'last_name' => "ragulan1",
                    'username' => "ragul",
                    'password' => bcrypt('ragul'),
                ], [
                    'first_name' => "w",
                    'last_name' => "w",
                    'username' => "w",
                    'password' => bcrypt('w'),
                ]
            ]);
        }
    }
