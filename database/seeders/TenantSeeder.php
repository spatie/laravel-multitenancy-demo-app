<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Multitenancy\Models\Tenant;

class TenantSeeder extends Seeder
{
    public function run(): void
    {
        foreach (range(1, 2) as $i)
            Tenant::create([
                'name' => "tenant{$i}",
                'domain' => "tenant{$i}.test",
                'database' => "multi_tenant_{$i}",
            ]);
    }
}
