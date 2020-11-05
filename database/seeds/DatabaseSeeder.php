<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(\Database\Seeders\DistrictSeeder::class);
         $this->call(\Database\Seeders\FinishTypeSeeder::class);
         $this->call(\Database\Seeders\PropertyTypeSeeder::class);
         $this->call(\Database\Seeders\UnitTypeSeeder::class);
         $this->call(\Database\Seeders\DevelopmentCompanySeeder::class);
    }
}
