<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('user_name');
            $table->string('user_lastname');
            $table->date('user_birth');
            $table->string('user_email')->unique();
            $table->string('user_password');
            $table->string('user_career');
            $table->string('user_studentCarne');
            $table->text('user_illness');
            $table->string('sleep_time');
            $table->string('excercise_time');
            $table->foreignId('id_type')->constrained('types', 'type_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
