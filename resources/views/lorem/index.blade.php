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

        <input type="submit" value="Generate!" class="button">
    </form>
    <h3>Fake Latin Text Results Will Appear Below:</h3>
    <div class="loremresults_container">
        {{---}}@foreach($paragraphs as $paragraph)
            {{ $paragraph }}
            <br><br>
        @endforeach---}}
    </div>
@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop