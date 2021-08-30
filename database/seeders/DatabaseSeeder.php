<?php

namespace Database\Seeders;

use App\Http\Controllers\test;
use App\Models\test as ModelsTest;
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
        // \App\Models\User::factory(10)->create();
        ModelsTest::factory(10)->create();
    }
}
