<?php

use Illuminate\Database\Seeder;
use \App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->admin();

        $this->tenant();

        $this->agent();
    }

    public function admin()
    {
        $user = new User;
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('a');
        $user->profile_img = 'this.png';
        $user->role_id_fk = 1;
        $user->save();
    }
}
