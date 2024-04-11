<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdditionalColumnsToAppliesTable extends Migration
{
    public function up()
    {
        Schema::table('applies', function (Blueprint $table) {
            $table->tinyInteger('isPresident')->default(0);
            $table->tinyInteger('hasBPages')->default(0);
            $table->tinyInteger('hasVPassports')->default(0);
            $table->tinyInteger('isCitizen')->default(0);
            $table->string('region')->nullable();
            $table->string('eInst')->nullable();
        });
    }

    public function down()
    {
        Schema::table('applies', function (Blueprint $table) {
            $table->dropColumn('isPresident');
            $table->dropColumn('hasBPages');
            $table->dropColumn('hasVPassports');
            $table->dropColumn('isCitizen');
            $table->dropColumn('region');
            $table->dropColumn('eInst');
        });
    }
}
