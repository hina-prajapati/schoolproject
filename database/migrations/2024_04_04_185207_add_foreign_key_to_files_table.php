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
        Schema::table('files', function (Blueprint $table) {
            $table->foreignId('pta_id')->nullable();
            $table->foreign('pta_id')->references('id')->on('ptas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
{
    Schema::table('files', function (Blueprint $table) {
        $table->dropForeign(['pta_id']);
        $table->dropColumn('pta_id');
    });
}
};
