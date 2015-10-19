@extends('layouts.master')


@section('title')
    Generate Lorem Ipsum Text
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')

@stop


@section('content')
    <h2>Generate Lorem Ipsum Text!</h2>

    <form class="container">
        <p>How many paragraphs do you want?</p>
        <b>Paragraphs</b>
            <input type='number' name='numParagraphs' min='1' max='100' value="5" id="paragraphs">
        (Max 100)
        <br><br>

        <input type="submit" value="Generate!">
    </form>

@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop