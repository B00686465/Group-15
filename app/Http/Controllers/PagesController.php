<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PagesController extends Controller
{
    public function home()
    {
    	return view('home');
    }
    public function about()
    {
    	return view('about');
    }
    public function contact()
    {
    	return view('tickets.create');
    }
    public function books()
    {
    	return view('books');
    }
}