<?php

namespace App\Repositories;

/**
 * Classe abstraite regroupant des fonctions utiles à des traitements de données.
 */
abstract class ResourceRepository
{

    protected $model;

    /**
     * Récupère tous les éléments (de la table courante) dans la base.
     *
     * @return \Illuminate\Http\Response Les éléments de la table courante.
     */
    public function getAll() {

    	return $this->model::all();
    }

    /**
     * Récupère un élément (de la table courante) à partir de son identifiant.
     *
     * @param  String  $nom  Le nom du candidat.
     * @return \Illuminate\Database\Eloquent/Model L'élément correpsondant à l'identifiant. Si echec, une exception "ModelNotFoundException".
     */
	public function getByName($nom)
	{
		return $this->model::where('nom_candidat', $nom);
	}
}