<?php

namespace App\Repositories;

use App\ResultatMot;
use App\ResultatDistance;

class AnalysesRepository
{

    /**
     * Récupère les 100 mots les plus employés par le candidat.
     *
     * @param  String  $nom  Le nom du candidat.
     * @return \Illuminate\Database\Eloquent/Model Les 100 mots les plus employés par le candidat.
     */
	public function getMots($nom) {

        $resultatMot = new ResultatMot();

		return $resultatMot::where('nom_candidat', $nom)->orderBy('compte_resultat', 'desc')->limit(100)->get();
	}

    /**
     * Récupère les distances entre le candidat actuel et les autres candidats.
     *
     * @param  String  $nom  Le nom du candidat actuel.
     * @return \Illuminate\Database\Eloquent/Model Les distances séparant ce candidat des autres.
     */
    public function getDistances($nom) {

        $resultatDistance = new ResultatDistance();

        return $resultatDistance::where('nom_candidat1', $nom)->orderBy('distance_candidats', 'desc')->get();
    }
}