<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InscriptionController extends Controller
{
    public function index()
    {
        // We will fetch counts here later
        return view('home');
    }

    public function location()
    {
        return view('location');
    }
}
