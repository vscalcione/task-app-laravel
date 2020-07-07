<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's db
     * 
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
        ]);
    }
}