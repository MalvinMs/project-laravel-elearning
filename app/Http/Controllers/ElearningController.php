<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElearningController extends Controller
{
    public function index()
    {
        return view('elearning.elearning');
    }
}
