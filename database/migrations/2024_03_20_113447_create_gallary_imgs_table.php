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
        Schema::create('gallary_imgs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('tag_id')->unsigned();;
            $table->string('title');
            $table->string('photo')->nullable();
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gallary_imgs');
    }
};
