<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Beer;

class PageController extends Controller
{
    public function index()
    {
        $beer = Beer::all();
        return view('home', compact('beer'));
    }
}
