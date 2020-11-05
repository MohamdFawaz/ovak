<?php

namespace Database\Seeders;

use App\Models\PropertyType;
use Illuminate\Database\Seeder;
use Faker;

class PropertyTypeSeeder extends Seeder
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
            PropertyType::query()->create([
                'en' => ['name' => $faker->name()],
                'ar' => ['name' => $faker->name()],
            ]);
        }
    }
}
