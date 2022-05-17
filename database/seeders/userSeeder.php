<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use SebastianBergmann\FileIterator\Factory;
use Faker;
use App\Models\User;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        User::create([
            'name'=>$faker->name,
            'user_name'=>$faker->name,
            'email' => $faker->email,
            'password' => 'password',
        ]);
    }
}
