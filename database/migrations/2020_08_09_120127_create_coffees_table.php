<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoffeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coffees', function (Blueprint $table) {
            $table->id();
			$table->timestamps();
			$table->enum('sugar', ['black', 'sweet', 'equal']);
			$table->enum('sugar_type', ['brown', 'regular', 'stevia', 'sugarine']);
			$table->enum('extra_ingredients', ['milk', 'cinnamon', 'cream', 'caramel']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coffees');
    }
}
