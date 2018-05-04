<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Books;

class BooksController extends Controller
{
	public function display()
	{
		$books = Books::all();
		return view('shop.books', compact('books'));
	}
    
    public function BasketAdd(Request $request, $id) {
    	$book = Books::find($id);
    	// Either get old basket or old basket is null
    	$oldBasket = Session::has('basket') ? Session::get('basket') : null;
    	//Create new basket to pass old cart null or not null
    	$basket = new Basket($oldBasket);
    	//Call the add method for basket object
    	$basket->add($book, $book->id);
    	//
    	$request->session()->put('basket', $basket);
    	// Redirect user back to books page
    	return redirect()->route('shop.books');
    }
    // return the basket page

    public function displayBasket(){
    	if( !Session::has('basket'))
    	{		// Return a basket with no items
    			return view('shop.basket', ['books'=> null]);
    	}
    	// Get basket from session variable
    	$previousBasket = Session::get('basket');
    	$basket = new Basket($previousBasket);
    	return view('shop.basket', ['books' =>$basket->books, 'Price'=> $basket->sum]);

    }

}
