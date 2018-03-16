<?php

use Illuminate\Database\Seeder;
use App\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $depts = [
        	['name' => 'TBM'],
	        ['name' => 'Photography'],
	        ['name' => 'IT'],
	        ['name' => 'Sewing'],
	        ['name' => '3D Lab'],
	        ['name' => 'OpenLab'],
        ];

        Department::insert($depts);
    }
}
