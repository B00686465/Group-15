<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customerEmail', 25)->unique();
            $table->string('surname', 25);
            $table->string('forename', 25);
            $table->text('address', 25);
            $table->string('city', 25);
            $table->text('postcode', 25);
            $table->string('telephone', 11);
            $table->string('password', 15);
            $table->rememberToken();
            $table->timestamps('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
