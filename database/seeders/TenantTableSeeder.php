<?php

use Illuminate\Database\Seeder;
use \App\RegisterTenant;

class TenantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->detail();
    }

    public function detail()
    {
        $reg_ten = new RegisterTenant;
        $reg_ten->first_name = 'Wakoli';
        $reg_ten->last_name = 'Bulamu';
        $reg_ten->phone = '07012345678';
        $reg_ten->address = 'Ratna Square';
        $reg_ten->user_id_fk = '5';
        $reg_ten->save();
    }
}
