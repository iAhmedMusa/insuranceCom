<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestTableV1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testTable', function (Blueprint $table) {
            $table->id();
            $table->string('insId', '20');
            $table->string('name');
            $table->string('address');
            $table->string('postCode', '50');
            $table->string('cityName', '100');
            $table->string('conNumber', '20');
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
        Schema::dropIfExists('testTable');
    }
}
