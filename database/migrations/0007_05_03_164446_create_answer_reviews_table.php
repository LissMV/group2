<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Review;
use App\Models\User;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('answer_reviews', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('comment');
            $table->foreignIdFor(User::class)->constrained();
            $table->foreignIdFor(Review::class)->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answer_reviews');
    }
};
