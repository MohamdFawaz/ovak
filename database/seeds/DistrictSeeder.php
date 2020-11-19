<?php

namespace Database\Seeders;

use App\Models\District;
use Faker;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 5;
        for ($i = 0; $i <= $limit; $i++) {
            District::query()->create([
                'en' => ['name' => $faker->name()],
                'ar' => ['name' => $faker->name()],
            ]);
        }
    }
}
