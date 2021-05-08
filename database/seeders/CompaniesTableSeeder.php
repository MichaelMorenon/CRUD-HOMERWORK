<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    $faker = faker::create();

    for ($i=0;$i<=2;$i++){
        Company::create([
            'name' => $faker->company,
            'description' => $faker->jobTitle,
            'nit' => $faker->creditCardNumber,
            'phone' => $faker->e164PhoneNumber,
        ]);

    }

    }
}
