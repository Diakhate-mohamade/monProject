<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function liste_Formation()
    {
        $toto = Formation::all();
        return view('FormationView.listeformatin',compact('toto'));

    }
}
