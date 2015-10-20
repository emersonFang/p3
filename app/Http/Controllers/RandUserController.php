<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RandUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getUsers()
    {
        //return "get random users";
        return view('randuser.index');
    }

    public function postUsers(Request $request)
    {
        $this->validate($request, [
            'numUsers' => 'required|numeric',
        ]);

        //generate new Users
        $faker= \Faker\Factory::create();
        $fake = array();
        for ($i = 0; $i <= htmlspecialchars($request["numUsers"]-1); $i++) {

            if (isset($request["profile"])) {//for profile
                array_push($fake, $faker->imageUrl(600, 480, 'cats', true, 'Faker')); // 'http://lorempixel.com/800/400/cats/Faker');
            }

            array_push($fake, 'name: '.$faker->name);

            if (isset($request["birthdate"])) {//for birthday
                array_push($fake, 'born: '.$faker->dateTimeThisCentury->format('Y-m-d'));
            }

            if (isset($request["color"])) {//for color
                array_push($fake, 'favorite color: '.$faker->safeColorName);

            }


        }

        //dd($request)->all();
        //dd($fake)->all();

        return view('randuser.postindex')->with(['fake'=> $fake]);
    }

}
