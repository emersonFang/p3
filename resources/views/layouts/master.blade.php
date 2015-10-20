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

        html {
            box-sizing: border-box;
        }

        *, *:before, *:after {
            box-sizing: inherit;
        }

        h1 {
            text-align: center;
        }

        h2, h3 {
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
            width:80%;
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
            border-radius: 15px;

        }

        .loremresults_container {
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

        .blocktext {
            margin-left: auto;
            margin-right: auto;
            width: 20em;
        }

        .container .blocktext {
            margin-left: auto;
            margin-right: auto;
            width:80%;
        }

        .user_results_container {
            text-align: left;
            font-size: smaller;
            border:1px solid black;
            padding: 1em;
            height:auto;
            width:50%;
            float: left;
            border-radius: 15px;
            overflow: auto;
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
            overflow: auto;
            width: 100%
        text-align: center;
            border-radius: 15px;
        }

        div.container {
            overflow: auto;
            width: 100%
            text-align: center;
            border-radius: 15px;
        }

        div img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .outer {
            width: 50%;
            height: 40%;
            -webkit-box-shadow: 0px 0px 10px #4d4d4d;
            -moz-box-shadow: 0px 0px 10px #4d4d4d;
            box-shadow: 0px 0px 10px #4d4d4d;
            -webkit-border-radius: 8px;
            -moz-border-radius: 8px;
            -khtml-border-radius: 8px;
            border-radius: 8px;
            border:solid white 3px;
            overflow: hidden;
            padding: 10px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .image {
            -webkit-border-radius: 8px;
            -moz-border-radius: 8px;
            -khtml-border-radius: 8px;
            border-radius: 8px;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

    </style>

        {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
        @yield('head')
    </head>

<body>

<header>
    <div class="outer" style="width: 200px;margin-top:1em">
        <div class="image">
            <img
                    class="displayed"
                    src="/assets/images/logo.png"
                    style='height:auto; width:100%;display:block;margin-left: auto;margin-right:auto'
                    alt='user and text generator app logo'>
        </div>
    </div>

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

<br>

<footer>
    &copy; {{ date('Y') }}
</footer>


</html>