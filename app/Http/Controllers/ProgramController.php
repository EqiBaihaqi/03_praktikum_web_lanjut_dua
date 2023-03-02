<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function program1(){
        return view('program', ['program' => 'Program 1' ]);
    }
    public function program2(){
        return view('program', ['program' => 'Program 2' ]);
    }
    public function program3(){
        return view('program', ['program' => 'Program 3' ]);
    }
}
