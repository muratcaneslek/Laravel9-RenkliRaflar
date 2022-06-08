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
        Schema::create('settings', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title',length:150);
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('company',length:150)->nullable();
            $table->string('addrress',length:150)->nullable();
            $table->string('phone',length:20)->nullable();
            $table->string('fax',length:20)->nullable();
            $table->string('email',length:75)->nullable();
            $table->string('smtpserver',length:75)->nullable();
            $table->string('smtpemail',length:75)->nullable();
            $table->string('smtppassword',length:15)->nullable();
            $table->integer('smtpport')->nullable()->default(0);
            $table->string('facebook',length:100)->nullable();
            $table->string('instagram',length:100)->nullable();
            $table->string('twitter',length:100)->nullable();
            $table->string('youtube',length:100)->nullable();
            $table->text('aboutus')->nullable();
            $table->text('contact')->nullable();
            $table->text('references')->nullable();
            $table->string('icon',length:100)->nullable();
            $table->string('status',length:5)->nullable()->default('False');
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
        Schema::dropIfExists('settings');
    }
};
