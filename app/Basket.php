<?php

namespace App;


class Basket
{
	// Cart object 
    public $books;
    /**
     * The sum of the basket
     *
     * @var float
     */
    public $sum;

    /**
     * Number of books in cart
     *
     * @var int
     */
    public $qty;
    

    // Old basket to access old books
    public function __construct($previousBasket)
    {
    	if($previousBasket){
    		$this->books = $previousBasket->book;
    		$this->qty = $previousBasket->qty;
    		$this->sum = $previousBasket->price;

    	} else {
    		$this->books= null;
    	}
    }
    // Add to basket
    public function add($Book,$id)
    {
    	// Array to identify books
    	$savedBook = ['book' => $book, 'retailprice' => $book->retailprice, 'qty' => 0];
    	// Check if books are in the basket
    	if($this->books)
    	{
    		// Check if item you want to add is already in the basket
    		if(array_key_exists($id, this->books))
    		{
    			// Saves this book again instead of first line of add function
    			$savedBook = $this->books[$id];
    		}
    	}
    	// Find price of book
    	$savedBook['retailprice'] = $book->retailprice * $savedBook['qty'];

    	// Increases quantity by one
    	$savedBook['qty']++;

    	// Adds to the quantity of the books object
    	$this->qty++;

    	// Adds to the sum of the books object
    	$this->sum += $book->retailprice;

    	// Saves the book with the new ID/ old ID in the books object
    	$this->books[$id] = $savedBook;
    }
    // Delete one book from basket
    public function delete($id)
    {

    	$this->qty--;
    }
    // Clear basket
    public function clear()
    {

    }

    public function confirm()
    {
    	// Decreases the number in stock
    	$book->instock--;
    }
}
