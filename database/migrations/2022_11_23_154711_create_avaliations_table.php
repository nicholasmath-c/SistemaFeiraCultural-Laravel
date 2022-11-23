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
            $table->string('email_visitor')->nullable();
            $table->string('project');
            $table->string('mention');
            $table->text('comment')->nullable();
            $table->timestamps();

            $table->foreign('email_visitor')->references('email')->on('visitors')->onDelete('cascade')->onUpdate('cascade');
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
