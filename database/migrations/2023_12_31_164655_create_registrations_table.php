<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('email')->unique();
            $table->text('name')->nullable();
            $table->text('designation')->nullable();
            $table->text('company')->nullable();
            $table->text('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('telephone_number')->nullable();
            $table->string('country_code')->nullable();
            $table->string('mobile_number')->nullable();
            $table->bigInteger('intl_delegate_physical_id')->unsigned()->nullable();
            $table->bigInteger('local_delegate_physical_id')->unsigned()->nullable();
            $table->bigInteger('intl_delegate_online_id')->unsigned()->nullable();
            $table->bigInteger('local_delegate_online_id')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
