<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffBranchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_branch', function (Blueprint $table) {
            $table->string('staffNo')->unique();
            $table->string('sName');
            $table->string('position');
            $table->string('salary');
            $table->string('branchNo');
            $table->string('bAddres');
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
        Schema::dropIfExists('staff_branch');
    }
}
