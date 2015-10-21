<!doctype html>

<meta charset="utf-8">

<html>
    <head>

        <title>Developer's Best Friend</title>
        <meta charset='utf-8'>
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/readable/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="/assets/css/welcome.css">

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="/assets/js/copyfunction.js"></script>
    </head>

    <body>
    <header>
        <img
                class="title"
                src="/assets/images/developer's best friend logo.png"
                alt='developers best friend logo'>
        </div>
    </header>
    <content style="text-align: center; width: 80%">
            <div class="container">
                <h2>Lorem Ipsum Generator</h2>
                <div class="blocktext">
                <p>Lorem ipsum is filler text that is used in place of real text while a project is in production.  Use this app to generate up to 100 paragraphs of fake Latin filler text! Amazing!</p>
                </div>
                <a href="lorem-ipsum">Generate Text!</a>
                <h2>Random User Generator</h2>
                <div class="blocktext">
                <p>The Random User Generator will produce fake entities, complete with a name and picture.  You can customize your random users to have a variety of attributes, such as DOB, email, phone, company, favorite color, etc.  Perfect for creating a fake identity.</p>
                </div>
                <a href="rand-user">Generate Random Users!</a>
                <h2>xkcd-style Password Generator</h2>
                <div class="blocktext">
                    <p>The xkcd-style Password Generator will produce passwords that use common words that are strung together, which is apparently easy to remember, but hard to guess by brute-force.  You can customize your password to have capital letters, hyphens, a number, and a special symbol.  Holy-Metal-Submarine-Batman1!</p>
                </div>
                <a href="pwd-gen">Generate Password!</a>
            </div>
    </content>
    <br>
    <br>
    <footer style="position: fixed;left: 0;right: 0;bottom: 0;">
        &copy; {{ date('Y') }}
        {!! " by Emerson Fang" !!}
    </footer>
    </body>
</html>