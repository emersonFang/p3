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
        $fake = array($faker->name);
        for ($i = 0; $i <= htmlspecialchars($request["numUsers"]); $i++) {
            if (isset($request["birthdate"])) {//for birthday
                array_push($fake, $faker->dateTimeThisCentury->format('Y-m-d'));
            }
            if (isset($request["profile"])) {//for profile
                array_push($fake, $faker->imageUrl(600, 480, 'cats', true, 'Faker')); // 'http://lorempixel.com/800/400/cats/Faker');
            }

            if (isset($_POST["color"])) {//for color
                array_push($fake, $faker->safeColorName);

            }
        }

        dd($request)->all();
        return "here are your randomly generated users";
    }

}
