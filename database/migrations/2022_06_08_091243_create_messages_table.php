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
        Schema::create('messages', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name',length:50);
            $table->string('email',length:50)->nullable();
            $table->string('phone',length:20)->nullable();
            $table->string('subject',length:100)->nullable();
            $table->string('message')->nullable();
            $table->string('note',length:100)->nullable();
            $table->string('ip',length:50)->nullable();
            $table->string('status',length:5)->nullable()->default('New');
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
        Schema::dropIfExists('messages');
    }
};
