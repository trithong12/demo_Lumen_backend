<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExhibitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* 展覽 */
        Schema::create('exhibitions', function (Blueprint $table) {
            $table->id('exh_id'); // 識別碼，Primary key，Auto increment
            $table->string('title'); // 展覽名稱，必填
            $table->text('description')->nullable(); // 簡介說明
            $table->string('source_web_promote')->nullable(); // 推廣網址
            $table->string('source_web_name')->nullable(); // 來源網址名稱
            $table->boolean('on_sales')->default(1); // 是否售票，預設是，必填
            $table->string('image_url')->nullable(); // 圖片連結
            $table->dateTime('start_datetime'); // 開始時間，必填
            $table->dateTime('end_datetime'); // 結束時間，必填
            $table->integer('exh_cate_id'); // 展覽類別，必填
            $table->foreign('exh_cate_id')->references('exhibition_categories')->on('exh_cate_id'); // Reference constraint
            $table->integer('site_id'); // 場地，必填
            $table->foreign('site_id')->references('sites')->on('site_id'); // Reference constraint
            $table->integer('master_unit'); // 主辦單位，必填
            $table->foreign('master_unit')->references('organizations')->on('org_id');
            $table->integer('sub_unit')->nullable(); // 協辦單位
            $table->foreign('sub_unit')->references('organizations')->on('org_id'); // Reference constraint
            $table->integer('support_unit')->nullable(); // 贊助單位
            $table->foreign('support_unit')->references('organizations')->on('org_id'); // Reference constraint
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
        Schema::dropIfExists('exhibitions');
    }
}
