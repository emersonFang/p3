<?php
//error_reporting(-1); # Report all PHP errors
//ini_set('display_errors', 0);
?>

<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <title>Emerson Fang DWA-15 P2 - xkcd-style password generator</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/pwdgen.css">

</head>

@include('pwdgen.logic')

<body>

<header role="banner">
    <h1>Emerson's xkcd-style Password Generator</h1>
</header>

<h2>Generate a secure password:</h2>

<div class="password-field">
    <?php
    password_logic();
    ?>
</div>

<div class="container">
    <form method='POST' action="/pwd-gen">
        <input type='hidden' name='_token' value="{{csrf_token()}}">

        Number of words (1-10):
        <input type='number' name='numWords' min='1' max='10' >
        <br>

        Include hyphens between words?
        <input type="checkbox" name="hyphensBool" value='Yes' /> Yes
        <br>

        Include a number?
        <input type="checkbox" name="numBool" value='Yes' /> Yes
        <br>


        Include a special symbol?
        <input type="checkbox" name="symbolBool" value="Yes" /> Yes
        <br>

        CamelCase Your Password?
        <input type="checkbox" name="camelBool" value="Yes" /> Yes
        <br>

        @if(count($errors) > 0)
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <input type="submit" name="submit" class="button">
    </form>
</div>

<h2>Inspired by xkcd:</h2>
<div class="container">
    <img src="http://imgs.xkcd.com/comics/password_strength.png" alt="xkcd password comic" class="comic">
</div>

</body>

</html>