<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Spatie\Multitenancy\Models\Tenant;

class TestJob implements ShouldQueue
{
    use Queueable;

    public function handle(): void
    {
        $tenant = Tenant::current();

        ray("Greetings from tenant {$tenant->name}");
        ray("We are using tenant database " . config('database.connections.tenant.database'));
    }
}
