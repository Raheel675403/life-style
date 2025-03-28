@extends('app_layouts.auth_layout.app-main')
@section('content')
    <div class="row">
        <div class="col-sm-12 mt-4 overview">
            @for($i = 0; $i < 10; $i++)
                <div class="card" style="width: 18rem; display: inline-block; margin: 10px;">
                    <img class="card-img-top" src="https://images.pexels.com/photos/1766838/pexels-photo-1766838.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title {{$i+1}}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary w-100">View</a>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection
