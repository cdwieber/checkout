<?php

use Illuminate\Database\Seeder;
use App\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//TODO: Inserting data manually for dummy tests. LDAP connection data is going in .env for now
        Setting::insert([
            ['group_id' => 1, 'use_ldap' => 1, 'name' => 'Use LDAP for Authentication'],
        ]);
    }
}
