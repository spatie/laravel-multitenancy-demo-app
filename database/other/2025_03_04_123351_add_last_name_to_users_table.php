<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('last_name')->after('name')->nullable();
        });
    }
};


/*
 * To run this migration, you can use the following command:
 *
 * php artisan tenants:artisan "migrate --database=tenant"
 */
