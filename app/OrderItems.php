<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    protected $fillable = [
        'invoicenumber','bookid','unitprice','quantity', 'linetotal', 'total',
	];
}


       