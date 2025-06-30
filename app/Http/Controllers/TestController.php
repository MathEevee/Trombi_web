<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class TestController extends Controller
{
    function index()
    {
        return Inertia::render('test/test');
    }
}
