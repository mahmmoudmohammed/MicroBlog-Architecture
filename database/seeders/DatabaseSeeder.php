<?php

namespace Database\Seeders;

use App\Http\Controllers\Api\Modules\Users\Models\User;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//         User::factory(10)->create();

         User::factory()->create([
             'username' => 'admin_user',
             'email' => 'admin@example.test',
             'password' => 'admin@example.test',
         ]);
    }
}
