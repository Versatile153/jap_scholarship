<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

     // In create_schemes_table.php
public function up()
{
    Schema::create('schemes', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('type');
        $table->date('expiry_date');
        $table->text('details')->nullable();
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('schemes');
}

};
