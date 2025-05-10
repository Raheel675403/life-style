@extends('app_layouts.auth_layout.app-main')
@section('content')

    <div class="row">
        @foreach ($videos['items'] as $video)
            @if(isset($video['id']['videoId']))
                <div class="col-sm-12 col-md-4 col-lg-3 mt-4 overview">
                    <div class="card" style="margin: 10px;">
                        <iframe width="100%" height="200" src="https://www.youtube.com/embed/{{ $video['id']['videoId'] }}" allowfullscreen></iframe>
                        <div class="card-body">
                            <h5 class="card-title">{{ $video['snippet']['title'] }}</h5>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@endsection
