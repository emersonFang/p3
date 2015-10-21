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
    <div class="outer" style="width: 200px;margin-top:1em">
        <div class="image">
            <img
                    class="displayed"
                    src="/assets/images/developer's best friend logo.png"
                    style='height:auto; width:100%;display:block;margin-left: auto;margin-right:auto'
                    alt='user and text generator app logo'>
        </div>
    </div>
    <br>
    <nav>
        <a href='/'>&larr; Home</a>
    </nav>
</header>

<section>
    {{-- Main page content will be yielded here --}}
    @yield('content')
</section>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="/assets/js/copyfunction.js"></script>

{{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
@yield('body')

</body>

<br>

<footer>
    &copy; {{ date('Y') }}
</footer>


</html>