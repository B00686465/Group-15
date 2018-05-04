<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoices extends Model
{
    protected $fillable = [
        'emailaddress','orderdate','subtotal','shippingmethod', 'shippingcost', 'total',
	];
}
