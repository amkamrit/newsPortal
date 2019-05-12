<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_list', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('category');
            $table->string('subcategory');
            $table->string('projectTitle');
            $table->string('description');
            $table->string('coverImage');
            $table->string('file');
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
        Schema::dropIfExists('project_list');
    }
}
