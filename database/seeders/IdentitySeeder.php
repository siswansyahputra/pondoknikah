<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IdentitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('identity')->insert([
            'name' => "Pondok Nikah",
            'tagline' => "Simple dan Kekinian",
            'description' => "Undangan web membuat pernikahan anda menjadi lebih berkesan",
            'logo' => "https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp",
            'active' => "y",
            'created_at' => Carbon::now()
        ]);
    }
}
