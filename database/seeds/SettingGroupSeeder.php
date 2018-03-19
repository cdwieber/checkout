<?php

use Illuminate\Database\Seeder;
use App\SettingGroup;

class SettingGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SettingGroup::insert([
        	['id' => 0, 'name' => 'General'],
	        ['id' => 1, 'name' => 'LDAP'],
        ]);
    }
}
