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
            // Check if the column exists before adding it
            if (!Schema::hasColumn('admissions', 'thumbnail')) {
                // Add the column with the desired definition
                $table->string('thumbnail')->nullable();
            }
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('admissions', function (Blueprint $table) {
            //
        });
    }
};
