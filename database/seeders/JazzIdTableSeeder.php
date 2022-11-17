<?php

use Illuminate\Database\Seeder;
use \App\User;

class JazzIdTableSeeder extends Seeder
{
    public function run()
    {
        $this->jazz_id();
    }

    public function jazz_id()
    {
        $jazz_id = new JazzId;
        $jazz_id->jazz_transaction_id = '12345';
        $jazz_id->contact_no = '07012345678';
        $jazz_id->agent_id_fk = '1';
        $jazz_id->save();
    }
}
