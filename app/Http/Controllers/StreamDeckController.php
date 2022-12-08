<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StreamDeckController extends Controller
{
    function index(Request $request) {
        return view("streamdeck");
    }
}
