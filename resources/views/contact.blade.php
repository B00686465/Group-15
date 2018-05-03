
@extends('master')
@section('title', 'Contact')

@section('content')
    <div class="container">
        <div class="content">
            <div class="title">Contact Page</div>
            <div class="quote">Our contact page!</div>
            
        </div>
    </div>
    {!! Form::open(array ('url' => 'contact')) !!}
            {!! Form::label('First name') !!}
            {!! Form::text('firstname', 'Enter your first name') !!}
            <br />
            {!! Form::label('Last name') !!}
            {!! Form::text('lastname', 'Enter your last name') !!}
            <br />
            {!! Form::submit() !!}
            {!! Form::close() !!}
@endsection
    </body>
</html>