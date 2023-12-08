<?php

namespace App\Http\Controllers;

use App\Models\apprenant;
use Illuminate\Http\Request;

class ApprenantController extends Controller
{
    public function liste_Apprenant()
    {
        $toto = apprenant::all();
        return view('ApprenatViews.liste',compact('toto'));

    }
}
