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
            Schema::table('bulletin_boards', function (Blueprint $table) {
                $table->string('slug')->unique()->nullable();
              
                $table->string('place')->nullable();
            });
        }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bulletin_boards', function (Blueprint $table) {
            //
        });
    }
};