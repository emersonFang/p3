@extends('layouts.master')


@section('title')
    Display Random Users
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')

@stop


@section('content')
    <h2>Generate New Random Users!</h2>
    <form class="container" method="post" action="/rand-user">
        <input type='hidden' name='_token' value="{{csrf_token()}}">
        <p>How many users do you want?</p>
        <b>Number of users</b>
        <input type='number' name='numUsers' min='1' max='100' value='{{old('numUsers')}}' id="paragraphs">
        (Max 100)
        <br>

        <p>Include:</p>

        <b>Profile</b>
        <input type="checkbox" name="profile" value='{{old('profile')}}' />
        <br>

        <b>Birthdate</b>
        <input type="checkbox" name="birthdate" value='{{old('birthdate')}}' />
        <br>

        <b>Favorite Color</b>
        <input type="checkbox" name="color" value='{{old('color')}}' />
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


    <h2>Your Randomly Generated Users</h2>
        @foreach ($fake as $user )
            <div class="user_results_container">
            @if((strpos($user,'http://lorempixel.com') !== false))
            <img src={{$user}} width='300px' height='200px'>
            <br><br>
            @else
            {{ $user }}
                @endif

                @if((strpos($user,'name: ') !== false))
                </div>
                @endif
        @endforeach


@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop