<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->time('start_time')->nullable()->after('filename'); // Adjust according to your schema
            $table->time('end_time')->nullable()->after('start_time');
            $table->date('start_date')->nullable()->after('end_time');
            $table->date('end_date')->nullable()->after('start_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn(['start_time', 'end_time', 'start_date', 'end_date']);
        });
    }
};
