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
        Schema::create('pregnancies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("user_id");
            $table->string("dob");
            $table->string("preg_duration");
            $table->string("birth_weight");
            $table->string("preg_complication");
            $table->string("lab_complication");
            $table->string("premium");
            $table->string("age_death")->nullable();
            $table->string("cause_death")->nullable();




        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pregnancies');
    }
};
