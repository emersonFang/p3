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

        .user_results_container {
            text-align: center;
            border:1px solid black;
            padding: 1em;
            height:400px;
            width:25%;
            float: left;

        }

        footer {
            position: fixed;

            left: 0;

            right: 0;

            bottom: 0;

        }

        nav {
            margin:auto;
            text-align: center;
        }

        div.container {
            border: 1px solid #000000;
            overflow: auto;
            width: 100%
            text-align: center;
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

    <nav>
        <a href='/'>&larr; Home</a>
    </nav>
</header>

<section>
    {{-- Main page content will be yielded here --}}
    @yield('content')
</section>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

{{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
@yield('body')

</body>

<footer>
    &copy; {{ date('Y') }}
</footer>


</html>