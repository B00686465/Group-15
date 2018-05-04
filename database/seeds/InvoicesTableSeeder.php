<?php

use Illuminate\Database\Seeder;

class InvoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $invoice = new \App\Invoices([
        	'emailaddress' => 'cmudas@gmail.com',
        	'orderdate'=> 'First book in the discworld series',
        	'subtotal'=>'Terry Pratchett',
        	'shippingmethod'=> 5,
        	'shippingcost'=> 5,
        	'total'=> 20,
        	
      
        ]);
        $invoice->save();
        $table->string('sdad@gmail.com');
            $table->foreign('emailaddress')->references('emailaddress')->on('users');
            $table->date('orderdate');
            $table->decimal('subtotal');
            $table->string('shippingmethod');
            $table->decimal('shippingcost');
            $table->decimal('total');
            $table->timestamps();
        $book = new \App\Invoices([
        	'bookname' => 'Crime And Punishment',
        	'bookdescription'=> 'Psychological crime novel based in St. Petersburg',
        	'bookauthor'=>'Dostoyevsky',
        	'unitprice'=> 5,
        	'retailprice'=> 5,
        	'instock'=> 20,
        	'reorderlevel'=>5,
        	'pathToImage' => 'images/crime_and_punishment.jpg'
        ]);
        $book->save();

        $book = new \App\Invoices([
        	'bookname' => 'The Sorcerers Stone',
        	'bookdescription'=> 'First book in the harry potter series',
        	'bookauthor'=>'J.K Rowling',
        	'unitprice'=> 5,
        	'retailprice'=> 5,
        	'instock'=> 20,
        	'reorderlevel'=>5,
        	'pathToImage' => 'images/sorcerers_stone.jpg'
        ]);
        $book->save();

        $book = new \App\Invoices([
        	'bookname' => 'Wyrd Sisters',
        	'bookdescription'=> 'Kingdoms wobble, crowns topple and knives flash on the magical Discworld as the statutory three witches meddle in royal politics.',
        	'bookauthor'=>'Terry Pratchett',
        	'unitprice'=> 5,
        	'retailprice'=> 5,
        	'instock'=> 20,
        	'reorderlevel'=>5,
        	'pathToImage' => 'images/wyrd_sisters.jpg'
        ]);
        $book->save();

        $book = new \App\Invoices([
        	'bookname' => 'War and Peace',
        	'bookdescription'=> 'A war',
        	'bookauthor'=>'Leo Tolstoy',
        	'unitprice'=> 5,
        	'retailprice'=> 5,
        	'instock'=> 20,
        	'reorderlevel'=>5,
        	'pathToImage' => 'images/war_and_peace.jpg'
        ]);
        $book->save();

        $book = new \App\Invoices([
        	'bookname' => 'Moby Dick',
        	'bookdescription'=> 'A hunt for a whale',
        	'bookauthor'=>'Herman Melville',
        	'unitprice'=> 5,
        	'retailprice'=> 5,
        	'instock'=> 20,
        	'reorderlevel'=>5,
        	'pathToImage' => 'images/wyrd_sisters.jpg'
        ]);
        $book->save();
        
        $book = new \App\Invoices([
        	'bookname' => 'The Wild Sheep Chase',
        	'bookdescription'=> 'A hunt for a sheep',
        	'bookauthor'=>'Haruki Murakami',
        	'unitprice'=> 5,
        	'retailprice'=> 5,
        	'instock'=> 20,
        	'reorderlevel'=>5,
        	'pathToImage' => 'images/sheep_chase.jpg'
        ]);
        $book->save();
        
        $book = new \App\Invoices([
        	'bookname' => '1984',
        	'bookdescription'=> 'Dystopian future',
        	'bookauthor'=>'George Orwell',
        	'unitprice'=> 5,
        	'retailprice'=> 5,
        	'instock'=> 20,
        	'reorderlevel'=>5,
        	'pathToImage' => 'images/1984.jpg'
        ]);
        $book->save();


    }
}

 
