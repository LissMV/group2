<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
Use App\Models\Store;
Use App\Models\categories;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('category_stores', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(Store::class)->constrained();
            $table->foreignIdFor(categories::class)->constrained();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_stores');
    }
};
