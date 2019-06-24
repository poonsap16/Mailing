<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mail_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_th','50');
            $table->string('surname_th','50');
            $table->string('name_en','50');
            $table->string('surname_en','50');
            $table->string('work_unit','255');
            $table->string('office_mail','50');
            $table->string('posernal_mail','50');
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
        Schema::dropIfExists('mail_lists');
    }
}
