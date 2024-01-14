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
        Schema::table('registrations', function (Blueprint $table) {
            $table->bigInteger('special_dietary_id')->after('local_delegate_online_id')->unsigned()->nullable();
            $table->longText('special_dietary_notes')->after('special_dietary_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('registrations', function (Blueprint $table) {
            $table->dropColumn('special_dietary_id');
            $table->dropColumn('special_dietary_notes');
        });
    }
};
