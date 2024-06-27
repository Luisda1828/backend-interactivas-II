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
        Schema::create('events', function (Blueprint $table) {
            $table->id('eve_id');
            $table->string('eve_title');
            $table->foreignId('eve_id_course')->constrained('courses', 'cour_id');
            $table->text('eve_description');
            $table->foreignId('id_etiqueta')->constrained('tags', 'tag_id');
            $table->foreignId('id_category')->constrained('categories', 'cat_id');
            $table->string('eve_image');
            $table->datetime('eve_datetime');
            $table->boolean('expired');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
