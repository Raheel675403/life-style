<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/auth-main.css') }}">

    {{-- Bootstrap CDN --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>@yield('title', 'life-style')</title>
</head>

<body>

<div class="container-fluid">
    <div class="row">
        @include('app_layouts.auth_layout.partial_component.header')
    </div>

    <div class="row">
        @include('app_layouts.auth_layout.partial_component.sidebar')

        <div class="col-md-9">
            <div class="content">
                <h1>Welcome to My Website</h1>
                <p>This is some content.</p>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $("#toggle-btn").click(function() {
            let sidebar = $("#sidebar");
            let navbar = $(".navbar");
            let content = $(".content");

            if (sidebar.css("left") === "-200px") {
                sidebar.css("left", "0");   // Open sidebar
                navbar.addClass("small-header"); // Adjust header width
                content.addClass("shift"); // Shift content
            } else {
                sidebar.css("left", "-200px"); // Close sidebar
                navbar.removeClass("small-header"); // Restore header width
                content.removeClass("shift"); // Reset content shift
            }
        });
    });
</script>

@section('script')
@show

</body>
</html>
