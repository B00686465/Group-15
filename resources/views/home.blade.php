<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 

        <title>Home Page</title>

       

        
    </head>
    <body>

    @extends('master')
    @section('title', 'Home')

    @section('content')
    <div class="container">  
        <div class="content">
                <div class="title">Home page </div>
                <div class="quote">Our Home page!</div>
                <button class="btn">Click me!</button>
        </div>
    </div>    
    @endsection
        
    </body>
</html>
