<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = Faker::create();
        return [
            'customer_fullname' => $faker->name(),
            'phone_number' => $faker->phoneNumber(),
            'email' => $faker->email(),
            'address' => $faker->address(),
        ];
    }
}
