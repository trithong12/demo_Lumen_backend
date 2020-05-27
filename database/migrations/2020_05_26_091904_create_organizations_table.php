<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* 單位 */
        Schema::create('organizations', function (Blueprint $table) {
            $table->id('org_id'); // 識別碼，Primary key，Auto increment
            $table->string('org_name'); // 單位名稱，必填
            $table->string('org_addr'); // 單位地址，必填
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
        Schema::dropIfExists('organizations');
    }
}
