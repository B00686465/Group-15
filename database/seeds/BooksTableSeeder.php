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
        	'reorderlevel'=>5,
        	//'pathToImage' => asset('images/colour.jpg')
        	'pathToImage' => 'images/colour.jpg'
      
        ]);
        $book->save();

        $book = new \App\Books([
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

        $book = new \App\Books([
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

        $book = new \App\Books([
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

        $book = new \App\Books([
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

        $book = new \App\Books([
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
        
        $book = new \App\Books([
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
        
        $book = new \App\Books([
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

 
