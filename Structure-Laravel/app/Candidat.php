<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Classe modèle de la table candidat.
 * Crée avec la commande "php artisan make:model Candidat".
 */
class Candidat extends Model
{
    protected $table = 'candidat';

    protected $primaryKey = 'nom_candidat';

    public $timestamps = false;

    public $incrementing = false;
}
