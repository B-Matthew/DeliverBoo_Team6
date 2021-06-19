<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('name')->default('');
            $table->string('ingredients')->default('');
            $table->string('description')->default('');
            $table->string('type')->default('');
            $table->decimal('price')->default('1.00');
            $table->boolean('availability')->default(true);
            $table->bigInteger('restaurant_id')->unsigned()->index()->default('21');

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
        Schema::dropIfExists('products');
    }
}
