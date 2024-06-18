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
        if (!Schema::hasTable('reviews')) {
            Schema::create('reviews', function (Blueprint $table) {
                $table->id();
                $table->string('customer_name');
                $table->unsignedInteger('star_rating');
                $table->text('comment');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('reviews');
    }

};
