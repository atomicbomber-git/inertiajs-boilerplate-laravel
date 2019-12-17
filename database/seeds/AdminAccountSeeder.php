<?php

use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminAccountSeeder extends Seeder
{
    private Generator $faker;

    public function __construct(Generator $faker)
    {
        $this->faker = $faker;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            "username" => "admin",
            "name" => "Administrator",
            "email" => $this->faker->email(),
            "password" => Hash::make("admin"),
        ]);
    }
}
