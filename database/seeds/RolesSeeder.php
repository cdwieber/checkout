<?php

use Illuminate\Database\Seeder;
use App\Role;
class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//The administrator role, which has all privileges, including the admin panel.
        $administrator = Role::create([
        	'role' => 'admin',
	        'name' => 'Administrator',
	        'permissions' => [
	        	'view-admin-panel' => true,
	        	'create-department' => true,
	        	'update-department' => true,
	        	'delete-department' => true,
	        	'create-user' => true,
		        'update-user' => true,
		        'delete-user' => true,
	        ]
        ]);

        //Supervisors are intended to be department supervisors. They can only edit departments assigned to them.
        $supervisor = Role::create([
        	'role' => 'supervisor',
	        'name' => 'Supervisor',
	        'permissions' => [
		        'update-user' => true,
	        ]
        ]);

        //Student workers or employees who are authorized to check in and out equipment
        $employee = Role::create([
        	'role' => 'employee',
	        'name' => 'Employee',
	        'permissions' => []
        ]);}
}
