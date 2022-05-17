<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use SebastianBergmann\FileIterator\Factory;
use faker;
use App\Models\User;

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
        user::factory()->count(20)->create();
    }
}
