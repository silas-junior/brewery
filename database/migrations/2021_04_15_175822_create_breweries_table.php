<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBreweriesTable extends Migration
{

    public function up()
    {
        Schema::create('breweries', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->text('descript')->nullable();
            $table->json('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('website')->nullable();
            $table->string('filepath')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
//        Schema::dropIfExists('breweries');
    }
}
