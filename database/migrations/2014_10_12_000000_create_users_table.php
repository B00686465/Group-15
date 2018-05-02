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
          //  $table->increments('id', 10)->index();
            $table->string('emailaddress', 30)->primary();
            $table->string('firstname', 25);
            $table->string('lastname', 25);
            $table->string('streetaddress', 30);
            $table->string('postcode', 8);
            $table->string('telephonenumber', 11);
            $table->string('password');
            $table->string('is_admin')->default('default');
            $table->Boolean('verified')->default(0);
            $table->string('confirmation_code')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
