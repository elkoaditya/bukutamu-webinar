<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebinarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webinars', function (Blueprint $table) {
            $table->id();
            $table->string('namaSekolah');
            $table->string('alamatSekolah')->nullable();
            $table->string('namaKepalaSekolah');
            $table->string('notelpKapsek');
            $table->string('jenjang')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('kabupaten')->nullable();
            $table->enum('from', ['register', 'admin']);
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
        Schema::dropIfExists('webinars');
    }
}
