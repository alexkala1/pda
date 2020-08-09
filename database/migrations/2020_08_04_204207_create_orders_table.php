<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->float('price');
            $table->boolean('has_paid')->default(false);
            $table->float('payment_amount')->nullable();
            $table->string('notes')->nullable();
			$table->string('status')->nullable();
			$table->softDeletes();
            $table->bigInteger('user_id');
            $table->bigInteger('customer_table_id');
            $table->bigInteger('product_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
