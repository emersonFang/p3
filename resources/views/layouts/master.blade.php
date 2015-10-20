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

    <style>

        h1 {
            text-align: center;
        }

        h2 {
            text-align: center;
            padding:0;
            border:0;
        }

        img.displayed {
            display: block;
            margin-left: auto;
            margin-right: auto
        }
        .container {
            width:70%;
            padding: 0;
            min-width:800px;
            margin:auto;
            text-align:center;
            font-size: 20px;
            font-weight: bold;
        }

        .results_container {
            width:70%;
            height: 200px;
            border:1px solid black;
            padding: 0%;
            min-width:800px;
            margin:auto;
            text-align:left;
            font-size: 10px;
            font-weight: bold;
            overflow:auto;
        }

    </style>

        {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
        @yield('head')
    </head>

<body>

<header>
    <img
            class="displayed"
            src="/assets/images/logo.png"
            style='width:200px'
            alt='user and text generator app logo'>
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