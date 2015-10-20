@extends('layouts.master')

<!---    <head>
        <title>Developer's Best Friend</title>

        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>--->
@section('title')
    Developer's Best Friend
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')

@stop

@section('content')
        <div class="container">
            <div class="content">
                <div class="title"><h1>Developer's Best Friend</h1></div>
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
            </div>
        </div>
@stop

@section('body')

@stop
