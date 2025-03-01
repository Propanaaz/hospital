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
        Schema::create('pregbios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("user_id");
            $table->string("total_preg");
            $table->string("total_liv_children");
            $table->string("lmp");
            $table->string("edd");
            $table->string("ip_num");
            $table->string("op_num");
            $table->string("preg_duration");
            $table->string("mage");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pregbios');
    }
};
