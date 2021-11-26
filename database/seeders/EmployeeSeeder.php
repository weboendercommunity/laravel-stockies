<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1,50) as $index) {

            DB::table('employees')->insert([
                'employee_code' => $index,
                'employee_fullname'  => $faker->name,
                'phone_number'   => $faker->phoneNumber,
                'address' => $faker->address,
                'role' => 'Admin',
                'created_at' => $faker -> dateTime(),
                'updated_at' => $faker -> dateTime()
            ]);

        }
    }
}
