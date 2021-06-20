<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('control_no');
            $table->integer('station_id');
            $table->string('type');
            $table->string('status');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('suffix')->nullable();
            $table->string('mobile');
            $table->string('email');
            $table->text('permanent_address')->nullable();
            $table->text('present_address');
            $table->string('civil_status');
            $table->string('citizenship');
            $table->string('gender');
            $table->string('date_of_birth');
            $table->longText('who')->nullable();
            $table->longText('what')->nullable();
            $table->longText('where')->nullable();
            $table->longText('when')->nullable();
            $table->longText('how')->nullable();
            $table->longText('synopsis')->nullable();
            $table->string('filename')->nullable();
            $table->integer('prepared_by_user_id')->nullable();
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
        Schema::dropIfExists('reports');
    }
}
