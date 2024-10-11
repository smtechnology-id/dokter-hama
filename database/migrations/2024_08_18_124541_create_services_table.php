<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Event\Telemetry\MemoryUsage;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('no_service');
            $table->string('customer_name');
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('active_ingredient')->nullable();
            $table->string('dosage')->nullable();
            $table->string('usage')->nullable();
            $table->text('note')->nullable();
            $table->date('date')->nullable();
            $table->datetime('timein')->nullable();
            $table->datetime('timeout')->nullable();
            $table->text('recomendation_from_client')->nullable();
            $table->text('advice_from_client')->nullable();
            $table->string('ttd_from_admin')->nullable();
            $table->string('ttd_from_client')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
