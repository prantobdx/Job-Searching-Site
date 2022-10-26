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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('category_id');
            $table->string('company_id');
            $table->integer('vacancy');
            $table->string('employment_status');
            $table->integer('experience');
            $table->integer('age');
            $table->text('job_location');
            $table->text('job_responsibilities');
            $table->text('educational');
            $table->text('skills');
            $table->text('compensation_benefits');
            $table->text('job_source');
            $table->date('published_date');
            $table->date('deadline_date');
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
        Schema::dropIfExists('jobs');
    }
};
