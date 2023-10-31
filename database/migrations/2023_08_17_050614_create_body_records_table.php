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
        Schema::create('body_records', function (Blueprint $table) {
            $table->id();
            //$table->foreign('user_id')->references('id')->on('users');
            $table->foreignId('user_id')->constrained('users');
            $table->double('height', 5, 2);
            $table->double('weight', 5, 2);
            $table->string("date_key");
            $table->timestampTz('original_created_at')->nullable();
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
        Schema::dropIfExists('body_records');
    }
};
