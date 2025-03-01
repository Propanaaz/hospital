<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("user_id");
            $table->string("file_cat");


            $table->string("fname");
            $table->string("lname");
            $table->string("mname");
            $table->string("address");
            $table->string("age");
            $table->string("occupation");
            $table->string("tribe");


            $table->string("phone_no");
            $table->string("place_of_Origin");
            $table->string("nok_name");
            $table->string("nok_address");
            $table->string("nok_phone");
            $table->string("sex");








        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biodatas');
    }
};
