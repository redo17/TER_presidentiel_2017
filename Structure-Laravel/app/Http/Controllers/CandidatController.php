<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\CandidatRepository;

/**
 * Contrôleur pour la table candidat.
 * Généré automatiquement avec la comande "sudo php artisan make:controller CandidatController --resource".
 */ 
class CandidatController extends Controller
{
    protected $candidatRepository;

    public function __construct(CandidatRepository $candidatRepository)
    {
        $this->candidatRepository = $candidatRepository;
    }

    /**
     * Récupère toute la liste des candidats.
     *
     * @return \Illuminate\Http\Response La vue avec les candidats.
     */
    public function index()
    {
        $listeCandidats = $this->candidatRepository->getAll();

        return view('index', compact('listeCandidats'));
    }   

    /**
     * Récupère un candidat selon son identifiant.
     *
     * @param  String  $nom  Le nom du candidat. 
     * @return \Illuminate\Http\Response La vue avec le candidat sélectionné.
     */
    public function show($nom)
    {
        $candidat = $this->candidatRepository->getByName($nom);

        return view('candidat',  compact('candidat'));
    }
}
