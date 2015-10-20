@extends('layouts.master')

@section('title')
    Display Lorem Ipsum Text
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')

@stop


@section('content')
    <h2>Generate Lorem Ipsum Text Again?</h2>
    <form class="blocktext" method="post" action="/lorem-ipsum">
        <input type='hidden' name='_token' value="{{csrf_token()}}">
        <p>How many paragraphs do you want?</p>
        <b>Paragraphs</b>
        <input type='number' name='numParagraphs' min='1' max='100' value='{{old('numParagraphs')}}' id="paragraphs">
        (Max 100)
        <br><br>

        @if(count($errors) > 0)
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <input type="submit" value="Generate!">
    </form>
    <h3>Your Fake Latin Text:</h3>
    <div class="loremresults_container">
        <p class="js-link">
            @foreach($paragraphs as $paragraph)
            {{ $paragraph }}
                <br><br>
            @endforeach
        </p>
    </div>
    <br>
    <p style="text-align: center"><button class="js-copybtn">Copy</button></p>
    <br>
    {{--<button onclick="copyToClipboard({{$paragraph}})">Copy</button>
    <br/><br/><input type="text" placeholder="Paste here for test" />--}}


@stop




{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop
