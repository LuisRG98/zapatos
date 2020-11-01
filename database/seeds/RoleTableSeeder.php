<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
    	$role=Role::create([
    		'name'=>'admin',
    		'display_name'=>'Administrador',
    	]);

    	$role2=Role::create([
    		'name'=>'insp',
    		'display_name'=>'Inspector de Buques',
    	]);

    	$role3=Role::create([
    		'name'=>'gfs',
    		'display_name'=>'Jefe de Sección',
    	]);
    }
}
