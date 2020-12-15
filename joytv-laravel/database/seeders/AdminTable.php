<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            'name' => 'Elizabeth Tanoh',
            'email' => 'lizzy@joytv.com',
            'password' => bcrypt('JoyTV1234'),
            'role' => 'admin',
        ));
    }
}
