<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = new \App\Books([
        	'bookname' => 'The Colour of Magic',
        	'bookdescription'=> 'First book in the discworld series',
        	'bookauthor'=>'Terry Pratchett',
        	'unitprice'=> 5,
        	'retailprice'=> 5,
        	'instock'=> 20,
        	'reorderlevel'=>5
       // 	'Image' => ''
        ]);
        $book->save();
        $book = new \App\Books([
        	'bookname' => 'Crime And Punishment',
        	'bookdescription'=> 'Psychological crime novel based in St. Petersburg',
        	'bookauthor'=>'Dostoyevsky',
        	'unitprice'=> 5,
        	'retailprice'=> 5,
        	'instock'=> 20,
        	'reorderlevel'=>5
       // 	'Image' => ''
        ]);
        $book->save();
        $book = new \App\Books([
        	'bookname' => 'The philosophers Stone',
        	'bookdescription'=> 'First book in the harry potter series',
        	'bookauthor'=>'J.K Rowling',
        	'unitprice'=> 5,
        	'retailprice'=> 5,
        	'instock'=> 20,
        	'reorderlevel'=>5
       // 	'Image' => ''
        ]);
        $book->save();
        $book = new \App\Books([
        	'bookname' => 'Wyrd Sisters',
        	'bookdescription'=> 'Kingdoms wobble, crowns topple and knives flash on the magical Discworld as the statutory three witches meddle in royal politics.',
        	'bookauthor'=>'Terry Pratchett',
        	'unitprice'=> 5,
        	'retailprice'=> 5,
        	'instock'=> 20,
        	'reorderlevel'=>5
       // 	'Image' => ''
        ]);
        $book->save();

    }
}

 
