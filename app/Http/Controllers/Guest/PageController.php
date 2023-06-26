<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('homepage');
    }

    public function about()
    {
        return view('about');
    }

    // public function movies()
    // {
    //     $arrMovies = Movie::all();;
    //     return view('movies', compact('arrMovies'));
    // }
}
