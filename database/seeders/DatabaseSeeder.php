<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Customer;
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
        $this->call([
            EmployeeSeeder::class,
            CustomerSeeder::class
        ]);
    }
}
