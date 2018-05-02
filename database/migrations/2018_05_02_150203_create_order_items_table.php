<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderItems', function (Blueprint $table) {

            $table->unsignedinteger('invoicenumber');
            $table->foreign('invoicenumber')
            ->references('invoicenumber')->on('invoices')
            ->onDelete('cascade');

            $table->unsignedinteger('bookid');
            $table->foreign('bookid')
            ->references('bookid')->on('books')
            ->onDelete('cascade');

            $table->decimal('unitprice');
            $table->integer('quantity');
            $table->decimal('linetotal');
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
        Schema::dropIfExists('orderItems');
    }
}
