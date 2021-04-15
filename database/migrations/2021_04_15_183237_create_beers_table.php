<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeersTable extends Migration
{

    public function up()
    {
        Schema::create('beers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('filepath')->nullable();
            $table->foreignId('brewery_id')
                ->nullable()
                ->constrained('breweries')
                ->cascadeOnDelete();
            $table->foreignId('category_id')
                ->nullable()
                ->constrained('categories')
                ->cascadeOnDelete();
            $table->foreignId('style_id')
                ->nullable()
                ->constrained('styles')
                ->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::table('beers', function (Blueprint $table) {
            $table->dropForeign(['brewery_id']);
            $table->dropForeign(['category_id']);
            $table->dropForeign(['style_id']);
        });
        Schema::dropIfExists('beers');
    }
}
