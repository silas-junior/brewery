<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeocodesTable extends Migration
{

    public function up()
    {
        Schema::create('geolocations', function (Blueprint $table) {
            $table->id();
            $table->float('latitude')->default(0);
            $table->float('longitude')->default(0);
            $table->string('accuracy')->nullable();
            $table->foreignId('brewery_id')
                ->nullable()
                ->constrained('breweries')
                ->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::table('geolocations', function (Blueprint $table) {
            $table->dropForeign(['brewery_id']);
        });
        Schema::dropIfExists('geolocations');
    }
}
