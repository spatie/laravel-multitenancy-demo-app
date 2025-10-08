<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Spatie\Multitenancy\Models\Tenant;

class MyTestCommand extends Command
{
    protected $signature = 'app:test';

    public function handle()
    {
        ray()->clearScreen();

        foreach (Tenant::all() as $tenant) {
            $tenant->makeCurrent();
            ray("Tenant name: " . $tenant->name)->green();
            ray("First user: " . User::first()->email);
        }
    }
}

// command to run this for all tenants
// a tenants:artisan "app:test"
