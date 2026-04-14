<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InscriptionController extends Controller
{
    /**
     * Display the Dashboard Home
     */
    public function index()
    {
        // Later, we will use DB::table('inscriptions')->count() here
        return view('home');
    }

    /**
     * Display the Location Hierarchy
     */
    public function location()
    {
        return view('location');
    }
}
