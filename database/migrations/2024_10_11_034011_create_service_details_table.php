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
        Schema::create('service_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')->references('id')->on('services');
            $table->string('area');
            $table->string('sub_area')->nullable();
            $table->string('tp_cf')->nullable();
            $table->string('tp_hf')->nullable();
            $table->string('tp_s')->nullable();
            $table->string('tp_b')->nullable();
            $table->string('tp_lv')->nullable();
            $table->string('tp_t')->nullable();
            $table->string('tp_ot')->nullable();
            $table->string('ai')->nullable();
            $table->text('remark')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_details');
    }
};
