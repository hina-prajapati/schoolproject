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
        Schema::table('ptas', function (Blueprint $table) {
            // Modify the "title" column to be nullable
            $table->string('title')->nullable()->change();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('files', function (Blueprint $table) {
            // Drop the foreign key constraint
            $table->dropForeign(['pta_id']);
            // Now, drop the column
            $table->dropColumn('pta_id');
        });
    }
    
};
