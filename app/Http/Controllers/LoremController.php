<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Badcow as Badcow;

class LoremController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLorem()
    {
        //return "get your Lorem Ipsum text";
        return view('lorem.index');
    }

    public function postLorem(Request $request)
    {
        $this->validate($request, [
            'numParagraphs' => 'required|numeric',
        ]);

        //generate new text
        $generator = new Badcow\LoremIpsum\Generator();
        $paragraphs = $generator->getParagraphs($request['numParagraphs']);

        return $paragraphs;
        //dd($request)->all();
        //return "here's your Lorem Ipsum text";
    }

}
