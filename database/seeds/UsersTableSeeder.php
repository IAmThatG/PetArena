<?php

    use Illuminate\Database\Seeder;
    use \Illuminate\Support\Facades\DB;
    use Carbon\Carbon;

    class UsersTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //
            DB::table('users')->insert([
                'email' => 'tester@tester.com',
                'password' => bcrypt('tester'),
                'role_id' => 2,
                'registration_code' => bcrypt('testercode'),
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ]);
        }
    }
