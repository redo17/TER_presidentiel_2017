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
     * @return \Illuminate\Database\Eloquent/Model L'élément correpsondant à l'identifiant. Si echec, une exception "ModelNotFoundException".
     */
	public function getByName($nom)
	{
		return $this->model::where('nom_candidat', $nom)->get()->first();
	}
}