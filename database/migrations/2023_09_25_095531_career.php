<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career', function (Blueprint $table) {
            $table->id();
            $table->string('job_position')->nullable();
            $table->string('experience')->nullable();
            $table->string('job_type')->nullable();
            $table->string('location')->nullable();
            $table->string('qualification')->nullable();
            $table->string('skills')->nullable();
            $table->string('working_days')->nullable();
            $table->string('content')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
