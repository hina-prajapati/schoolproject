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
        Schema::table('admissions', function (Blueprint $table) {
            $table->text('job_description')->nullable()->after('long_description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('admissions', function (Blueprint $table) {
            $table->dropColumn('job_description');
        });
    }
};
