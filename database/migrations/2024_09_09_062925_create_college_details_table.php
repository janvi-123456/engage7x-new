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
        Schema::create('college_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->integer('course_id');
            $table->string('college_name');
            $table->dateTime('promotion_start_date');
            $table->dateTime('promotion_end_date');
            $table->string('utm_link')->nullable();
            $table->string('logo')->nullable();
            $table->string('one_slide')->nullable();
            $table->string('gdpi_experience')->nullable();
            $table->string('brahmastra_document')->nullable();
            $table->string('cat_min_percentile')->nullable();
            $table->string('cat_max_percentile')->nullable();
            $table->string('emailers')->nullable();
            $table->string('micro_site')->nullable();
            $table->dateTime('round1')->nullable();
            $table->dateTime('round2')->nullable();
            $table->dateTime('round3')->nullable();
            $table->float('application_form_fees')->nullable();
            $table->float('college_fees')->nullable();
            $table->string('placement_highlight')->nullable();
            $table->string('wow_factors')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('college_details');
    }
};
