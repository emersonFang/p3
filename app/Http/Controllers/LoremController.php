<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoremController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLorem()
    {
        return "get your Lorem Ipsum text";
    }

    public function postLorem()
    {
        return "here's your Lorem Ipsum text";
    }

}
