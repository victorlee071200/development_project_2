<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('type');
            $table->String('slug')->nullable();
            $table->string('code')->unique();
            $table->bigInteger('length');
            $table->decimal('price', $precision = 8, $scale = 2);
            $table->enum('option',['physical','online','both']);
            $table->enum('status',['to-be-confirmed','approved','rejected']);
            $table->text('description');
            $table->text('thumbnail_path');
            $table->text('training_document')->nullable();
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
        Schema::dropIfExists('programs');
    }
}
