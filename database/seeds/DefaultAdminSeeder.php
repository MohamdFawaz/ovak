<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class DefaultAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::query()->create([
            'name' => 'default admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('12345')
        ]);
    }
}
