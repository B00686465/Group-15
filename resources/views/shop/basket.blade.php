@extends('master')
@section('title', 'Basket')

@section('content')
    <div class="container">
        <div class="content">
          @if(Session::has('basket'))
          <div class="row">
             
              <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                  <img src="{{asset($books->pathToImage)}} " alt="Cannot display image"/>
                    <div class="caption">
                      <h3>{{ $books->bookname}}</h3>
                      <div class ="cost pull-left"> £5</div>
                      <br />
                      <br />
                      <p>Author: {{$books->bookauthor }}</p>
                      <p>{{ $books->bookdescription }}</p>
                      <div>
                      <a href="{{ route('basketAdd', ['id' =>$books->id])}}" class="btn btn-primary center-block" role="button">Add to Basket</a>
                    </div>
                    </div>
                </div>
              </div>
             
            </div>
            @else


            @endif
        </div>
    </div>
@endsection
    </body>
</html>