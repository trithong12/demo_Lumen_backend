<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExhibitionCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* 展覽類別 */
        Schema::create('exhibition_categories', function (Blueprint $table) {
            $table->id('exh_cate_id'); // 識別碼，Primary key，Auto increment
            $table->string('exh_cate_name'); // 展覽類別名稱
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
        Schema::dropIfExists('exhibition_categories');
    }
}
