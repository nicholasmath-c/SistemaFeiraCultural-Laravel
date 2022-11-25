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
        Schema::create('avaliations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_teacher')->nullable();
            $table->foreign('id_teacher')->references('id')->on('teachers')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_project');
            $table->foreign('id_project')->references('id')->on('projects')->onDelete('cascade')->onUpdate('cascade');
            $table->string('mention');
            $table->text('comment')->nullable();
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
        Schema::dropIfExists('avaliations');
    }
};
