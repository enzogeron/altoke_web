<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContestDepartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contest_department', function(Blueprint $table) {
            $table->integer('contest_id')->unsigned();
            $table->integer('department_id')->unsigned();
            $table->foreign('contest_id')
                    ->references('id')
                    ->on('contests');
            $table->foreign('department_id')
                    ->references('id')
                    ->on('departments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contest_department');
    }
}
