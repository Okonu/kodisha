<?php

use Illuminate\Database\Seeder;
use \App\AgentPost;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //post for agent
        $this->post();
    }
}
