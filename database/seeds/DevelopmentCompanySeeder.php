<?php

namespace Database\Seeders;

use App\Models\DevelopmentCompany;
use Faker;
use Illuminate\Database\Seeder;

class DevelopmentCompanySeeder extends Seeder
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
            DevelopmentCompany::query()->create([
                'en' => ['name' => 'test'],
                'ar' => ['name' => 'test'],
            ]);
            DevelopmentCompany::query()->create([
                'en' => ['name' => $faker->name()],
                'ar' => ['name' => $faker->name()],
            ]);
        }
    }
}
