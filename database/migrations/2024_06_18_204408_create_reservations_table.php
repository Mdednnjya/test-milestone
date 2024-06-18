<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasTable('reservations')) {
            Schema::create('reservations', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('active_phone_number');
                $table->enum('type_of_service', ['Haircuts and styling', 'Manicure and pedicure', 'Facial treatments']);
                $table->dateTime('date_and_time');
                $table->timestamps();
            });
        }
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
