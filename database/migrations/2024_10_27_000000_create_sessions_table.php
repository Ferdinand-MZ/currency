<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->text('payload');
            $table->integer('last_activity');
            $table->unsignedBigInteger('user_id')->nullable(); // Add this line if you need user_id
            $table->ipAddress('ip_address')->nullable(); // Optional: Add IP address if needed
            $table->string('user_agent')->nullable(); // Optional: Add user agent if needed
        });
    }

    public function down()
    {
        Schema::dropIfExists('sessions');
    }
};
