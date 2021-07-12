<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PageController extends Controller
{
    //return view('home)
    public function index() {
        $movies = Movie::all();
        return view('home', compact($movies));
    }
}
