<?php

namespace App\Http\Controllers;

use App\Http\Requests\RechercheRequest;

class RechercheController extends Controller
{
    public function recherche(RechercheRequest $request) {

    	return view('resultat-recherche')->with('mot', $request->input('recherche'));
    }
}
