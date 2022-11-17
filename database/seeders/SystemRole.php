<?php

use Illuminate\Database\Seeder;
use \App\Role;

class SystemRole extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminroles = new Role();
        $adminroles->role = "Admin";
        $adminroles->save();
        $tenantroles = new Role();
        $tenantroles->role = "Tenant";
        $tenantroles->save();
        $agentroles = new Role();
        $agentroles->role = "Property Agent";
        $agentroles->save();
    }
}
