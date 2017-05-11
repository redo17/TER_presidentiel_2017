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
}