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
        ray("Tenant name: " . Tenant::current()->name);
        ray("First user: " . User::first()->email);
    }
}

// command to run this for all tenants
// a tenants:artisan "app:test"
