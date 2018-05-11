<?php

use Illuminate\Database\Seeder;

class NewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array('name'=>'Davide', 'email'=>'diblasio.davide@gmail.com', 'password'=>bcrypt('ciaone')),
            array('name'=>'Beniamino', 'email'=>'diblasio.davide92@gmail.com', 'password'=>bcrypt('ciaone')),
            array('name'=>'Luca', 'email'=>'diblasio.davide9@gmail.com', 'password'=>bcrypt('ciaone'))
        );

        DB::table('users')->insert($data);
    }
}
