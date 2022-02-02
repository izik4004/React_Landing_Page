<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();

            $table->string('gender');
            $table->date('date_of_birth');
            $table->string('id_no')->nullable();
            $table->string('roll')->nullable();
            $table->string('blood_group');
            $table->string('religion');
            $table->string('class');
            $table->string('section');
            $table->string('address')->nullable();
            $table->string('admission_id')->nullable();
            $table->string('phone')->nullable();
            $table->text('bio')->nullable();
            $table->unsignedBigInteger('media_id')->nullable();
            $table->string('role', 20)->default('student');
            $table->foreign('media_id')->references('id')->on('media')->cascadeOnDelete();

            $table->rememberToken();
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
}
