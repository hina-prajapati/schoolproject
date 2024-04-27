<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up()
    // {
    //     Schema::table('files', function (Blueprint $table) {
    //         // Add pta_id column after the id column
    //         $table->foreignId('pta_id')->nullable()->after('id');

    //         // Define foreign key constraint
    //         $table->foreign('pta_id')->references('id')->on('ptas')->onDelete('cascade');
    //     });
    // }
    public function up()
    {
        Schema::table('files', function (Blueprint $table) {
            // Check if the column exists before adding it
            if (!Schema::hasColumn('files', 'pta_id')) {
                // Add the new column
                $table->unsignedBigInteger('pta_id')->nullable()->after('id');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
   public function down()
    {
        Schema::table('files', function (Blueprint $table) {
            // Drop foreign key constraint
            $table->dropForeign(['pta_id']);

            // Drop pta_id column
            $table->dropColumn('pta_id');
        });
    }
};
