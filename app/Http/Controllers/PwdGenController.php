<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Input;

class PwdGenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPwd()
    {

        //return "get Pwd";
        return view('pwdgen.index');
    }

    public function postPwd(Request $request)
    {
        $this->validate($request, [
            'numWords' => 'required|numeric',
        ]);

        $numWords=$request['numWords'];

        return view('pwdgen.index')->with(['numWords' => $numWords]);
    }
}