<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* 場地 */
        Schema::create('sites', function (Blueprint $table) {
            $table->id('site_id'); // 識別碼，Primary key，Auto increment
            $table->string('site_name'); // 場地名稱，必填
            $table->string('site_addr'); // 地址，必填
            $table->double('latitude')->nullable(); // 緯度
            $table->double('longitude')->nullable(); // 經度
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
        Schema::dropIfExists('sites');
    }
}
