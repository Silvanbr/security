<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Errorcontroller extends Controller
{
    public function index()
    {
        return view("errors.500");
    }
}
