<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;

class BooksController extends Controller
{
	public function index()
	{
		$books = Books::all();
		return view('shop.books', compact('books'));
	}
    
}