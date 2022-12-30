@php
    use \Illuminate\Support\Str;
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name')}}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    {{-- <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/blog.css')}}" rel="stylesheet">
</head>

<body>

    <div class="container">
    @include('partials.navbar')
    @includeWhen(request()->is('/'),'partials.jumbotron')

    <main role="main" class="container">
        <div class="row">
            <div class="col-md-9 blog-main">
                @yield('content')
            </div>
            <aside class="col-md-3 blog-sidebar">
                @include('partials.sidebar')
            </aside>
        </div>
    </main>
    @include('partials.footer')

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{url('assets/js/jquery.slim.min.js')}}"></script>
    <script src="{{url('assets/js/popper.min.js')}}"></script>
    <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/js/holder.min.js')}}"></script>
    <script>
        Holder.addTheme('thumb', {
            bg: '#55595c',
            fg: '#eceeef',
            text: 'Thumbnail'
        });
    </script>
</body>

</html>
