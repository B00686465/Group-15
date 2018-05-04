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
        	'emailaddress' => 'cmud31as@gmail.com',
        	'orderdate'=> 10/14/2017,
        	'subtotal'=>'10.4',
        	'shippingmethod'=> '3 Day delivery',
        	'shippingcost'=> 3.5,
        	'total'=> 20.0,
        ]);
        $invoice->save();
        
        $invoice = new \App\Invoices([
            'emailaddress' => 'cmud321as@gmail.com',
            'orderdate'=> 10/14/2017,
            'subtotal'=>'10.4',
            'shippingmethod'=> '3 Day delivery',
            'shippingcost'=> 3.5,
            'total'=> 20.0,
        ]);
        $invoice->save();
        

        $invoice = new \App\Invoices([
            'emailaddress' => 'cmudas2das@gmail.com',
            'orderdate'=> 10/14/2017,
            'subtotal'=>'10.4',
            'shippingmethod'=> '3 Day delivery',
            'shippingcost'=> 3.5,
            'total'=> 20.0,
        ]);
        $invoice->save();

        $invoice = new \App\Invoices([
            'emailaddress' => 'cm321udas@gmail.com',
            'orderdate'=> 10/14/2017,
            'subtotal'=>'10.4',
            'shippingmethod'=> '3 Day delivery',
            'shippingcost'=> 3.5,
            'total'=> 20.0,
        ]);
        $invoice->save();

        $book = new \App\Invoices([
        	'emailaddress' => 'cm321udas@gmail.com',
            'orderdate'=> 10/14/2017,
            'subtotal'=>'10.4',
            'shippingmethod'=> '3 Day delivery',
            'shippingcost'=> 3.5,
            'total'=> 20.0,
        ]);
    
        $book->save();

        $book = new \App\Invoices([
        	'emailaddress' => 'cm321udas@gmail.com',
            'orderdate'=> 10/14/2017,
            'subtotal'=>'10.4',
            'shippingmethod'=> '3 Day delivery',
            'shippingcost'=> 3.5,
            'total'=> 20.0,
        ]);
        $book->save();
        
        $book = new \App\Invoices([
        	'emailaddress' => 'cm321udas@gmail.com',
            'orderdate'=> 10/14/2017,
            'subtotal'=>'10.4',
            'shippingmethod'=> '3 Day delivery',
            'shippingcost'=> 3.5,
            'total'=> 20.0,
        ]);
    
        $book->save();
        
        $book = new \App\Invoices([
        	'emailaddress' => 'cm321udas@gmail.com',
            'orderdate'=> 10/14/2017,
            'subtotal'=>'10.4',
            'shippingmethod'=> '3 Day delivery',
            'shippingcost'=> 3.5,
            'total'=> 20.0,
        ]);
      
        $book->save();


    }
}

 
