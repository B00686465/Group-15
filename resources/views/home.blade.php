@extends('master')
@section('title', 'Contact')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Welcome to the Book store</h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="welcome-container" style="font-family: Arial; font-size: medium; color: #000000">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur at justo turpis. Integer et diam sed neque imperdiet egestas vel quis quam. Maecenas sed porttitor lorem. In libero erat, mollis non tortor id, hendrerit vehicula est. Nulla vestibulum commodo lorem. Maecenas rhoncus, dolor eu dignissim pretium, augue metus mollis eros, quis varius mi nibh a justo. Nam dignissim pellentesque nibh nec pulvinar. Pellentesque id felis ac leo egestas eleifend eu in lacus. Aliquam non dolor libero. Nullam sit amet convallis magna. Integer rhoncus lectus vitae nunc accumsan, et ultrices leo ultrices.

                    Maecenas vitae dolor molestie, lobortis nulla sit amet, cursus diam. Ut posuere fermentum lectus et interdum. Nam nec egestas neque. Cras dapibus neque et ligula pellentesque, sagittis fermentum nibh vestibulum. Curabitur tincidunt mi turpis, ac sollicitudin metus viverra at. In hac habitasse platea dictumst. Suspendisse nec ligula nulla. Cras luctus ipsum vel nulla porta feugiat. Vivamus dictum aliquet lectus, in porttitor turpis luctus eu. Fusce augue mi, consequat id nibh eleifend, bibendum condimentum metus. Curabitur condimentum in metus non fringilla. Nullam at elit elementum orci ultrices gravida.

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


