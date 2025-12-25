<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('category_tags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');//поле, в котором будет храниться идентификатор категории.
            $table->unsignedBigInteger('tag_id');//поле, в котором будет храниться идентификатор тега.
            $table->index('category_id', 'category_tag_category_idx');//нужно для ускорения поиска
            $table->index('tag_id', 'category_tag_tag_idx');
            $table->foreign('category_id', 'category_tag_category_fk')->on('categories')->references('id');
            $table->foreign('tag_id', 'category_tag_tag_fk')->on('tags')->references('id');// РАБОТАЕТ С ТАБЛИЦЕЙ ,НЕ ДАЕТ ВПУСТИТЬ ИНФОРМАЦИЮ КОТОРОЙ НЕТ В ТАБЛ
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_tags');
    }
};
