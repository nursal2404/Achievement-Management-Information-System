<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('jurusan')->nullable();
            $table->string('email');
            $table->string('gender');
            $table->string('username')->unique();
            $table->string('password');
            $table->enum('level',['admin','user'])->default('user');
            // $table->integer('perolehan_prestasi')->nulllable()->default(0);
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
        Schema::dropIfExists('users');
    }
};
