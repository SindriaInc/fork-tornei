<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array('name'=>'Marco', 'email'=>'t@me.it', 'password'=>bcrypt('todos'),'isAdmin'=>1)
        );

        DB::table('users')->insert($data);
    }
}
