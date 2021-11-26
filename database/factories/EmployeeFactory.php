<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

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
         return [
            // 'employee_code' => $this->faker->number(),
            // 'employee_fullname' => $this->faker->name(),
            // 'phone_number' => $this->faker->phoneNumber(),
            // 'address' => $this->faker->addresses(), 
            // 'role' => Str::random(5),
        ];
    }
}
