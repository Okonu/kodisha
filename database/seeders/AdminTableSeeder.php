<?php

use Illuminate\Database\Seeder;
use \App\RegisterAdmin;

class AdminTableSeeder extends Seeder
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
        $reg_admin = new RegisterAdmin();
        $reg_admin->first_name = 'Adi';
        $reg_admin->last_name = 'Mini';
        $reg_admin->phone = '0712345678';
        $reg_admin->address = 'Mombasa';
        $reg_admin->user_id_fk = '1';
        $reg_admin->save();
    }
}
