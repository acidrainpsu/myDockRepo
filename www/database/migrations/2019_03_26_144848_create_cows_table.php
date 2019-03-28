<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cows', function (Blueprint $table) {
            $table->increments('cow_id');
            $table->string('ear_tag',100)->nullable();
            $table->string('farm_id',100)->nullable();
            $table->string('register_code',100)->nullable();
            $table->string('cow_name',100)->nullable();
            $table->string('sex',100)->nullable();
            $table->string('breed_id',100)->nullable();
            $table->string('color',100)->nullable();
            $table->string('birthdate',100)->nullable();
            $table->string('birth_weight',100)->nullable();
            $table->string('sire',100)->nullable();
            $table->string('dam',100)->nullable();
            $table->string('breeder_id',100)->nullable();
            $table->string('owner_id',100)->nullable();
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
        Schema::dropIfExists('cows');
    }
}
