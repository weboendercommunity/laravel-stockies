<?php

namespace Database\Seeders;

use App\Models\User;
<<<<<<< HEAD
=======
use App\Models\Customer;
>>>>>>> 54d9a2c6c22a5cb4d14b9be84c74d7323c849441
use App\Models\Employee;
use Illuminate\Database\Seeder;
use Database\Seeders\EmployeeSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        // \App\Models\User::factory(10)->create();
        $this->call([
            EmployeeSeeder::class
        ]); 
=======
        $this->call([
            EmployeeSeeder::class,
            CustomerSeeder::class
        ]);
>>>>>>> 54d9a2c6c22a5cb4d14b9be84c74d7323c849441
    }
}
