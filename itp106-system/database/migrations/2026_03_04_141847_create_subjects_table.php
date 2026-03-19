<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('subjects', function (Blueprint $table) {
        $table->id();
        $table->string('code')->unique(); // ITP106
        $table->string('title');
        $table->integer('units');
        $table->foreignId('level_id')->constrained()->cascadeOnDelete(); #Means: 1.Each subject MUST belong to a level 2.Laravel enforces data integrity (rubric loves this)
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
