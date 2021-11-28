<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    // protected $model = Employee::class;

    public function definition()
    {
        $faker = Faker::create();

         return [
            
            'employee_code' => $faker->numerify("E###"),
            'employee_fullname' => $this->faker->name(),
            'phone_number' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(), 
            'role' => 'Staff',
        ];
    }
}
