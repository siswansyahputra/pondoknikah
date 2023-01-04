<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
                'level' => "admin",
                'active' => "y",
                'created_at' => Carbon::now()
            ]
        );
        DB::table('users')->insert(
            [
                'username' => "tanti92",
                'name' => "Tanti Sri Gusti",
                'password' => Hash::make("123456"),
                'nowa' => "083197444205",
                'level' => "manager",
                'active' => "y",
                'created_at' => Carbon::now()
            ]
        );
        DB::table('users')->insert(
            [
                'username' => "adam18",
                'name' => "Adam Muhammad Bilal",
                'password' => Hash::make("123456"),
                'nowa' => "083197444205",
                'level' => "reseller",
                'active' => "y",
                'created_at' => Carbon::now()
            ]
        );
        DB::table('users')->insert(
            [
                'username' => "abdul20",
                'name' => "Abdullah",
                'password' => Hash::make("123456"),
                'nowa' => "083197444205",
                'level' => "pelanggan",
                'active' => "y",
                'created_at' => Carbon::now()
            ]
        );
    }
}
