<!doctype html>
<html>

<head>

    <title>
        {{-- Yield the title if it exists, otherwise default to 'Developer's Best Friend' --}}
        @yield('title',"Developer's Best Friend")
    </title>

    <meta charset='utf-8'>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/readable/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="/assets/css/generatorpages.css">

     {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')
</head>

<body>

<header>
    <img
            class="title"
            src="/assets/images/developer's best friend aqua logo.png"
            alt='user and text generator app logo'>
    <br>
    <nav>
        <a class="button1" href='/'>&larr; Home</a>
    </nav>
</header>

<section>
    {{-- Main page content will be yielded here --}}
    <div>
    @yield('content')
    </div>
</section>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="/assets/js/copyfunction.js"></script>

{{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
@yield('body')
<br>
<footer>
    &copy; {{ date('Y') }}
    {!!" by Emerson Fang"!!}
</footer>
</body>

</html>