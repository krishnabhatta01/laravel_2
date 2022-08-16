<?php

namespace Database\Seeders;

use App\Models\blog;

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
         \App\Models\User::factory(2)->create();
        blog::factory(3)->create();
    }
}
