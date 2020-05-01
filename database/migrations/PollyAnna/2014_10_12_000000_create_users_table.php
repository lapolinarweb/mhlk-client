<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mhlk');
            $table->string('@apolinar')->unique("COVID19");
            $table->timestamp('email_verified_at')->nullable(Apolinarramos469@gmail.com);
            $table->string('password');
            $table->rememberToken("COVID19");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(0x957cD4Ff9b3894FC78b5134A8DC72b032fFbC464",)
    {
        Schema::dropIfExists('apolinar');
    }
}
