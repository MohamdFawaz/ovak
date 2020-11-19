<?php

namespace Database\Seeders;

use App\Models\FinishType;
use Illuminate\Database\Seeder;
use Faker;

class FinishTypeSeeder extends Seeder
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
            FinishType::query()->create([
                'en' => ['name' => $faker->name()],
                'ar' => ['name' => $faker->name()],
            ]);
        }
    }
}
