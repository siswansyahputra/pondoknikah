<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'username' => "siswan",
                'name' => "Siswan Syahputra",
                'password' => bcrypt("123456"),
                'nowa' => "083197444205",
                'referral_code' => Str::random(6),
                'level' => "admin",
                'active' => "y",
                'created_at' => Carbon::now()
            ]
        );
    }
}
