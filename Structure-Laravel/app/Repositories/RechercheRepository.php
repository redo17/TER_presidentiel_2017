<?php

namespace App\Repositories;

use App\ResultatMot;

class RechercheRepository extends ResourceRepository
{
    public function __construct(ResultatMot $resultatMot) {

        $this->model = $resultatMot;
    }

    /**
     * Récupère les occurences du mot recherché pour chaque candidat.
     *
     * @param  String  $mot  Le mot recherché.
     * @return \Illuminate\Database\Eloquent/Model .
     */
    public function getOccurencesMot($mot) {

    	return $this->model::where('valeur_mot', $mot)->orderBy('compte_resultat', 'desc')->get();
    }
}