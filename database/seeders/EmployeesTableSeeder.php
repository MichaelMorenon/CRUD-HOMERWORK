<?php

namespace Database\Seeders;

use App\Models\employee;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = faker::create();

        for ($i=0;$i<=20;$i++){
            Employee::create([
                'name' => $faker->name,
                'lastname' => $faker->lastName,
                'email' => $faker->email(),
                'document' => $faker->numerify(),
                'gender' => $faker->userName,
                'companies_id' => 2
            ]);

        }

    }
}
