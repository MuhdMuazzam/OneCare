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
        Schema::create('locals', function (Blueprint $table) {
            $table->id();
            $table->string('LocalsName');
            $table->string('LocalsEmail')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('LocalsIC');
            $table->string('LocalsContact');
            $table->string('LocalsAddress');
            $table->string('LocalsPostcode');
            $table->string('LocalsState');
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
        Schema::dropIfExists('locals');
    }
};
