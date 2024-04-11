<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // In add_file_to_applies_table.php
public function up()
{
    Schema::table('applies', function (Blueprint $table) {
        $table->string('file')->nullable(); // Add this line to define the 'file' column
    });
}

public function down()
{
    Schema::table('applies', function (Blueprint $table) {
        $table->dropColumn('file');
    });
}

};
