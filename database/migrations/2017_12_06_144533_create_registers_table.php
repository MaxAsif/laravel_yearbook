<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->integer('id',false,false);
            $table->text('course');
            $table->string('rollno');
            $table->primary(array('id','rollno'));
            $table->text('name');
            $table->text('department');
            $table->text('dob');
            $table->text('email_insti');
            $table->text('email');
            $table->text('HOR');
            $table->text('phone');
            $table->text('view_self');
            $table->text('pro_pic');
            $table->timestamps();
        });
    DB::statement('ALTER TABLE registers MODIFY id INTEGER NOT NULL AUTO_INCREMENT');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registers');
    }
}
