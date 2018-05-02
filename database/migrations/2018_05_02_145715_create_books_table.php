<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('bookid');
            $table->string('bookname');
            $table->string('bookdescription');
            $table->string('bookauthor');
            $table->decimal('unitprice');
            $table->decimal('retailprice');
            // Number of books in stock
            $table->integer('instock');
            // Number when books when instock = reordernumber, reorder needs to happen
            $table->integer('reorderlevel');
            $table->timestamps();

           // $table->primary('bookid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
