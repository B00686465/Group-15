@extends('master')
@section('title', 'Books')

@section('content')
    <div class="container">
        <div class="content">
            <div class="title">Books</div>
            <div class="quote">Display books</div>
            <div class="row">
  				<div class="col-sm-6 col-md-4">
    				<div class="thumbnail">
      					<img src="{{asset('images/colour.jpg') }}" alt="Cannot display image" style="max-height: 200px" class="img-responsive">
      						<div class="caption">
        						<h3>Book Title</h3>
        						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi efficitur, ipsum eget fringilla blandit, erat tortor cursus odio, eu malesuada ligula libero non lectus. Morbi laoreet hendrerit euismod. Vivamus mollis lacus libero, a vulputate turpis vulputate et. Nam diam justo, ultricies elementum fringilla id, lacinia et ante.</p>
        						<div>
        							<a href="" class="btn btn-primary" role="button">Button</a>
        						</div>
      						</div>
    				</div>
  				</div>
			</div>
        </div>
    </div>
@endsection
    </body>
</html>