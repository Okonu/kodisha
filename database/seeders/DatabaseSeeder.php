<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            SystemRoles::class,s
            UserTableSeeder::class,
            TenantTableSeeder::class,
            AdminTableSeeder::class,
            AgentTableSeeder::class,
            JazzIdTableSeeder::class,
            PostTableSeeder::class,
        ]);
    }
}
