<?php

namespace App\Repositories;

use App\Candidat;

class CandidatRepository extends ResourceRepository
{
    public function __construct(Candidat $candidat)
    {
        $this->model = $candidat;
    }

    /**
     * Récupère un candidat à partir de son nom.
     *
     * @param  String  $nom  Le nom du candidat.
     * @return \Illuminate\Database\Eloquent/Model Le profil complet du candidat.
     */
	public function getCandidat($nom) {

		return $this->model::where('nom_candidat', $nom)->get()->first();
	}

    /**
     * Récupère le prénom d'un candidat à partir de son nom.
     *
     * @param  String  $nom  Le nom du candidat.
     * @return \Illuminate\Database\Eloquent/Model Le prénom du candidat.
     */
    public function getPrenom($nom) {

        return $this->model::select('prenom_candidat')->where('nom_candidat', $nom)->get()->first();
    }
}