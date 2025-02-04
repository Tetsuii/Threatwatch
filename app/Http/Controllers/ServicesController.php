<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        return view('services');
    }

    public function showLETD()
    {
        return view('LETD');
    }

    public function showenhance()
    {
        return view('enhance');
    }

    public function showTHT()
    {
        return view('THT');
    }
}
