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

        //multidimensional for the users
        $alluserdata = array();

        //generate data for each user
        for ($i = 0; $i <= htmlspecialchars($request["numUsers"]-1); $i++) {
            $userdata = array();
            if (isset($request["profile"])) {//for profile
                array_push($userdata, $faker->imageUrl(300, 240, 'cats', true, 'Faker')); // 'http://lorempixel.com/800/400/cats/Faker');
            }

            array_push($userdata, 'name: '.$faker->name);

            if (isset($request["birthdate"])) {//for birthday
                array_push($userdata, 'born: '.$faker->dateTimeThisCentury->format('Y-m-d'));
            }

            if (isset($request["color"])) {//for color
                array_push($userdata, 'favorite color: '.$faker->safeColorName);

            }

            $alluserdata[]=$userdata;

        }

        //dd($request)->all();
        //dd($fake)->all();

        return view('randuser.postindex')->with(['alluserdata'=> $alluserdata]);
    }

}
