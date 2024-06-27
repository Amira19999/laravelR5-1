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
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->string('StudentName', 100);
            $table->string('adg', 25);
            $table->string('image', 100);
            // $table->foreignId('Subject_id')->constrained('teacher');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_student');
    }

    public function teacher () {
   
        return $this->belongsToMany(teacher::class);
    }

};
