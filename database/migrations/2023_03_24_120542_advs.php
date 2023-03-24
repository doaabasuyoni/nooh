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
       //نقل المعلومات الى قواعد البيانات 
       Schema::create('advall', function (Blueprint $table) {
        $table->increments('id');
        $table->string('slug')->unique();
        $table->string('title');
        $table->longText('description');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
