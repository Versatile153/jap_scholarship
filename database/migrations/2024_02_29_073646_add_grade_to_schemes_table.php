<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGradeToSchemesTable extends Migration
{
    public function up()
    {
        Schema::table('schemes', function (Blueprint $table) {
            $table->string('grade')->after('details')->nullable(); // Change 'details' to the column after which you want to add 'grade'
        });
    }

    public function down()
    {
        Schema::table('schemes', function (Blueprint $table) {
            $table->dropColumn('grade');
        });
    }
}
