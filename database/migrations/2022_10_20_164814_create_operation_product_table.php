<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operation_product', function (Blueprint $table) {
            $table->id();
            $table->integer('amount');
            $table->float('cost');
            $table->string('description');
            $table->unsignedBigInteger('operation_id');
            $table->unsignedBigInteger('product_id');
            $table->foreign('operation_id')
                ->references('id')
                ->on('operations');
            $table->foreign('product_id')
                ->references('id')
                ->on('products');
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
        Schema::dropIfExists('operation_product');
    }
};
