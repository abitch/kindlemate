<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Admin',1)->create([
            'name'=>'admin',
            'email'=>'itzane@163.com',
            'password'=>bcrypt('abcd1234')
        ]);
    }
}
