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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->fulltext();
            $table->string('slug')->unique();
            $table->longText('body');
            $table->string('image')->nullable();
            $table->string('status')->default('publish')->index();
            $table->nullableMorphs('causer', 'causer');
            $table->json('reading')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('causer_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
