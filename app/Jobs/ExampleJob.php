<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Spatie\Multitenancy\Models\Tenant;

class ExampleJob implements ShouldQueue
{
    use Queueable;

    public function handle(): void
    {
        ray("In job of " . Tenant::current()->name);

        ray("First user:" . User::first()->email);
    }
}
