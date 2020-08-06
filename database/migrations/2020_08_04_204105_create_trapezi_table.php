<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrapeziTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trapezi', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('meros');
			$table->float('price');
			$table->softDeletes();
            $table->integer('customers');
            $table->bigInteger('paraggelia_id');
            $table->bigInteger('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trapezi');
    }
}
