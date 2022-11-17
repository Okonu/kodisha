<?php

use Illuminate\Database\Seeder;
use \App\RegisterAgent;

class AgentTableSeeder extends Seeder
{
    /**
     * Running the database seedfs.
     * @var void
     */
    public function run()
    {
        $this->detail();
    }

    public function detail()
    {
        $reg_agent = new RegisterAgent;
        $reg_agent->first_name = 'Ajenti';
        $reg_agent->last_name = 'Baba';
        $reg_agent->phone = '0712345678';
        $reg_agent->address = 'Ratna';
        $reg_agent->user_id_fk = '2';
        $reg_agent->is_received = 1;
        $reg_agent->is_upgraded = 1;
        $reg_agent->save();
    }
}
