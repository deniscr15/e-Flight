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
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->unsignedInteger('route_id');
            $table->unsignedInteger('operator_id');
            $table->unsignedInteger('aircraft_type_id');
            $table->integer('flight_arrival')->default(0);
            $table->integer('flight_departure')->default(0);

            $table->integer('passenger_arrival')->default(0);
            $table->integer('passenger_departure')->default(0);

            $table->integer('cargo_arrival')->default(0);
            $table->integer('cargo_departure')->default(0);

            $table->integer('cancellation')->default(0);
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
        Schema::dropIfExists('flights');
    }
};
