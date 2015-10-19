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
    <form>
        <p>How many users do you want?</p>
        <b>Number of users</b>
        <input type='number' name='numUsers' min='1' max='100' value="5" id="paragraphs">
        (Max 100)
        <br>

        <p>Include:</p>
        <b>Birthdate</b>
        <input type="checkbox" name="birthdate" value='Yes' />
        <br>

        <b>Profile</b>
        <input type="checkbox" name="profile" value='Yes' />
        <br>

        <b>Favorite Color</b>
        <input type="checkbox" name="color" value='Yes' />
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