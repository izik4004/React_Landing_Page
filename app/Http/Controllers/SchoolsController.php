<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Game;

class SchoolsController extends Controller
{
    public function index()
    {
        $schools = School::all();
        return view('schools.index', ['schools' => $schools]);
    }
    
    public function show(School $id)
    {
        return view('schools.show', ['school' => $id]);
    }
    
    public function create()
    {
        
        return view('schools.create');
    }
}
