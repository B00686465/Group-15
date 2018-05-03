<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $fillable = [
        'bookname','bookdescription','bookauthor','unitprice', 'retailprice', 'instock', 'reorderlevel' //'Image' 
	];
    
}
