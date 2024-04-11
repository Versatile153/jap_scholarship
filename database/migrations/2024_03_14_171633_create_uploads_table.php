<?php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uploads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key reference to the users table
            $table->string('course');
            $table->string('duration');
            $table->string('academic_year');
            $table->string('file1')->nullable(); // Path to the uploaded file 1
            $table->string('file2')->nullable(); // Path to the uploaded file 2
            $table->string('file3')->nullable(); // Path to the uploaded file 3
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uploads');
    }
}
