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
            $table->string('start_time_period')->nullable()->after('start_time');
        });
    }
    /**
     * Reverse the migrations.
     */
        public function down()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn('start_time_period');
        });
    }
};
