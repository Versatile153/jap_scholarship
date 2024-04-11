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
        Schema::table('schemes', function (Blueprint $table) {
            $table->enum('status', ['active', 'expired', 'cancelled'])->default('active');
        });
    }

    public function down()
    {
        Schema::table('schemes', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }

};
