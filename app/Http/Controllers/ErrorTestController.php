<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class ErrorTestController extends Controller
{
    public function triggerError()
    {
        throw new Exception("This is a test 500 error.");
    }
}
