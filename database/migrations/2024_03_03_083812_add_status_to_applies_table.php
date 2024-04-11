<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToAppliesTable extends Migration
{
    public function up()
    {
        Schema::table('applies', function (Blueprint $table) {
            $table->enum('status', ['accepted', 'rejected', 'reviewed','not reviewed'])->default('not reviewed');
        });
    }

    public function down()
    {
        Schema::table('applies', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
