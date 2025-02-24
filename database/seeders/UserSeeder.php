<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Multitenancy\Models\Tenant;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'email' => Tenant::current()->name . '@example.com'
        ]);
    }
}
