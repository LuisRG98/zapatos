<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::truncate();
    	$user=User::create([
    		'name'=>'Luis',
    		'lastname1'=>'Rivas',
    		'lastname2'=>'Giwencer',
    		'rango'=>'Vicealmirante',
    		'email'=>'luisricardorivasgiwencer@gmail.com',
    		'password'=>'rivas1998',
    		'state'=>'activo',
    		'avatar'=>'public/img/profilespics/user.png'
    	]);
    }
}
