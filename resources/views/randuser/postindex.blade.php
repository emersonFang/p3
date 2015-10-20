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
    <form class="blocktext" method="post" action="/rand-user">
        <input type='hidden' name='_token' value="{{csrf_token()}}">
        <p>How many users do you want?</p>
        <b>Number of users</b>
        <input type='number' name='numUsers' min='1' max='100' value='{{old('numUsers')}}' id="paragraphs">
        (Max 100)
        <br>

        <p>Include:</p>

        {{--}}<b>Profile</b>
        <input type="checkbox" name="profile" value='{{old('profile')}}' />
        <br>--}}

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

        <input type="submit" value="Generate!">

    </form>


    <h2>Your Randomly Generated Users (Meow!):</h2>

    <div class="container">
        @foreach ( $alluserdata as $user )
            <div class="user_results_container">
            @foreach ( $user as $userdata )
                @if( (strpos( $userdata,'http://lorempixel.com' ) !== false) ){{--http://stackoverflow.com/questions/4366730/check-if-string-contains-specific-words--}}
                        {{--referred to http://stackoverflow.com/questions/6856711/css-rounded-corners-on-an-image-problem--}}
                        <div class="outer">
                            <div class="image">
                                <img src={{$userdata}} width='100%' height='100%' alt="user profile pic">
                            </div>
                        </div>

                <br><br>
                @else
                <div class ="blocktext">
                {{ $userdata }}<br><br>
                </div>
                @endif
            @endforeach
            </div>
        @endforeach
    </div>
@stop

{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
@stop
