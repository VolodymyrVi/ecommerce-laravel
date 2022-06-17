<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePtoductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ptoducts', function (Blueprint $table) {
            $table->id();

            $table->string('title_ua');
            $table->string('title_ru')->nullable();
            $table->text('description_ua');
            $table->text('description_ru')->nullable();
            $table->text('content_ua');
            $table->text('content_ru')->nullable();
            $table->string('seo_description_ua');
            $table->string('seo_description_ru')->nullable();
            $table->string('seo_keywords_ua');
            $table->string('seo_keywords_ru')->nullable();
            $table->string('preview_image');


            $table->decimal('price', 5, 2);
            $table->integer('count');


            $table->boolean('is_published')->default(true);
            $table->boolean('is_new')->default(false);
            $table->boolean('is_hit')->default(false);
            $table->boolean('is_recomended')->default(false);


            $table->foreignId('user_id')->nullable()->index()->constrained('users');
            $table->foreignId('category_id')->nullable()->index()->constrained('categories');


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
        Schema::dropIfExists('ptoducts');
    }
}
