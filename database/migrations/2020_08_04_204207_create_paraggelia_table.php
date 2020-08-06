<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParaggeliaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paraggelia', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->float('price');
            $table->boolean('payment_status');
            $table->integer('payment_amount')->nullable();
            $table->string('notes')->nullable();
			$table->string('status');
			$table->softDeletes();
            $table->bigInteger('user_id');
            $table->bigInteger('trapezi_id');
            $table->bigInteger('proion_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paraggelia');
    }
}
