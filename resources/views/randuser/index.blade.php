@extends('layouts.master')


@section('title')
    Generate Random Users
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')

@stop


@section('content')
    <h2>Generate Random Users!</h2>
    <form class="blocktext" method="post" action="/rand-user">
        <input type='hidden' name='_token' value="{{csrf_token()}}">
        <p>How many users do you want?</p>
        <b>Number of users</b>
        <input type='number' name='numUsers' min='1' max='100' value='{{old('numUsers')}}' id="paragraphs">
        (Max 100)
        <br>

        <p>Include:</p>

        <b>Company</b>
        <input type="checkbox" name="company" value='{{old('company')}}' />
        <br>

        <b>Email</b>
        <input type="checkbox" name="email" value='{{old('email')}}' />
        <br>

        <b>Phone</b>
        <input type="checkbox" name="phone" value='{{old('phone')}}' />
        <br>

        <b>Location</b>
        <input type="checkbox" name="location" value='{{old('location')}}' />
        <br>

        <b>Birthdate</b>
        <input type="checkbox" name="birthdate" value='{{old('birthdate')}}' />
        <br>

        <b>Favorite Color</b>
        <input type="checkbox" name="color" value='{{old('color')}}' />
        <br>


        <b>Favorite Quote</b>
        <input type="checkbox" name="favoritequote" value='{{old('favoritequote')}}' />
        <br><br>

        @if(count($errors) > 0)
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <input type="submit" value="Generate!" style="text-align: center">

    </form>

@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop
