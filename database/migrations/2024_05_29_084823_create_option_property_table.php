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
        Schema::create('option_hike', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\Option::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Hike::class)->constrained()->cascadeOnDelete();
            $table->primary(['option_id', 'hike_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('option_caca');
    }
};