<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('subcity_id')->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('subcity')->nullable();
            $table->integer('bedroom');
            $table->integer('bathroom');
            $table->integer('parking')->nullable();
            $table->text('type');
            $table->integer('kitchen');
            $table->string('area');
            // $table->double('price', 8, 2);
            // $table->double('discount_price', 8, 2)->nullable();
            $table->string('price');
            $table->string('discount_price')->nullable();
            $table->string('total_price')->nullable();
            $table->string('category');
            $table->string('floor')->nullable();
            $table->string('details');
            $table->string('video')->nullable();
            $table->string('purpose');
            $table->string('image_one');
            $table->string('image_two');
            $table->string('image_three');
            $table->string('status');
            $table->string('property_code')->nullable();
            $table->string('map_link')->nullable();
            $table->string('date')->nullable();
            $table->string('month')->nullable();
            $table->string('year')->nullable();
            $table->integer('trend')->nullable();
            $table->integer('best_rated')->nullable();
            $table->integer('hot_new')->nullable();
            $table->string('service_charge')->nullable();
            $table->string('added_by')->nullable();
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
        Schema::dropIfExists('user_properties');
    }
}
