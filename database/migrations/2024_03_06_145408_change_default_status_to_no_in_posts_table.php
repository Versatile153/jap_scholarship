<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeDefaultStatusToNoInPostsTable extends Migration
{
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->enum('status', ['yes', 'no'])->default('no')->change();
        });
    }

    public function down()
    {
        // You can revert the change if needed
    }
}
