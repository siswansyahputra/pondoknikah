<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert(
            [
                'name' => "Identitas",
                'route' => "identity",
                'level' => "admin",
                'icon' => "fa-bookmark",
                'dropdown' => "n",
                'active' => "y",
                'created_at' => Carbon::now()
            ]
        );
        DB::table('menu')->insert(
            [
                'name' => "Manager",
                'route' => "manager",
                'level' => "admin",
                'icon' => "fa-users",
                'dropdown' => "n",
                'active' => "y",
                'created_at' => Carbon::now()
            ]
        );
        DB::table('menu')->insert(
            [
                'name' => "Reseller",
                'route' => "reseller",
                'level' => "manager",
                'icon' => "fa-users",
                'dropdown' => "n",
                'active' => "y",
                'created_at' => Carbon::now()
            ]
        );
        DB::table('menu')->insert(
            [
                'name' => "Customer",
                'route' => "customer",
                'level' => "reseller",
                'icon' => "fa-users",
                'dropdown' => "n",
                'active' => "y",
                'created_at' => Carbon::now()
            ]
        );
        DB::table('menu')->insert(
            [
                'name' => "Menu Dropdown",
                'route' => "#",
                'level' => "customer",
                'icon' => "fa-bar",
                'dropdown' => "y",
                'active' => "y",
                'created_at' => Carbon::now()
            ]
        );
    }
}
