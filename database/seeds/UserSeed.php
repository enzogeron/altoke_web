<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {

        // Administrador
   		$user = User::create([
   		   'name' => 'Enzo Geron',
   		   'email' => 'enzogeron@gmail.com',
   		   'password' => bcrypt('enzo1234')
   		]);

   		$user->assignRole('administrador');
    }
}
