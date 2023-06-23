<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_brands', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->timestamps();
        });

        Schema::table('cars', function (Blueprint $table) {
            $table->unsignedBigInteger('brand_id')->nullable()->after('model');
            $table->foreign('brand_id')->references('id')->on('car_brands');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->dropForeign('car_brands_brand_id_foreign');
            $table->dropColumn('brand_id');
        });

        Schema::dropIfExists('car_brands');
    }
}
