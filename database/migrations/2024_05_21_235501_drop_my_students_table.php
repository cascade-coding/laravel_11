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
        // if (Schema::hasTable('my_students')) {
        //     // Schema::dropIfExists('my_students');
        //     Schema::drop('my_students');
        // }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // if (!Schema::hasTable('my_students')) {
        //     Schema::create('my_students', function (Blueprint $table) {
        //         $table->id();
        //         $table->string('name');
        //         $table->timestamps();
        //     });
        // }
    }
};
