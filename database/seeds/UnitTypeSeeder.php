<?php

namespace Database\Seeders;

use App\Models\UnitType;
use Illuminate\Database\Seeder;
use Faker;

class UnitTypeSeeder extends Seeder
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
            UnitType::query()->create([
                'en' => ['name' => $faker->name()],
                'ar' => ['name' => $faker->name()],
            ]);
        }
    }
}
