<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Foobooks' --}}
        @yield('title','Developer\'s Best Friend)
    </title>

    <meta charset='utf-8'>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>

<header>
    <img
            src='https://snap-photos.s3.amazonaws.com/img-thumbs/960w/LCAFAT07PE.jpg'
            style='width:300px'
            alt='stock computer photo'>
</header>

<section>
    {{-- Main page content will be yielded here --}}
    @yield('content')
</section>

<footer>
    &copy; {{ date('Y') }}
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

{{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
@yield('body')

</body>
</html>