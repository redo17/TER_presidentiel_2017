<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\AnalysesRepository;
use App\Repositories\CandidatRepository;

/**
 * Contrôleur pour les analyses des candidats.
 * Généré automatiquement avec la comande "sudo php artisan make:controller AnalysesController --resource".
 */ 
class AnalysesController extends Controller
{

    protected $analysesRepository;
    protected $candidatRepository;

    public function __construct(AnalysesRepository $analysesRepository, CandidatRepository $candidatRepository) {

        $this->analysesRepository = $analysesRepository;
        $this->candidatRepository = $candidatRepository;
    }

    /**
     * Récupère un candidat et ses analyses selon son nom.
     *
     * @param  String  $nom  Le nom du candidat. 
     * @return \Illuminate\Http\Response La vue avec le candidat sélectionné et ses analyses.
     */
    public function show($nom) {

        $profil = $this->candidatRepository->getCandidat($nom);
        $distances = $this->analysesRepository->getDistances($nom);

        $analysesCandidat = array(
            
            'profil'    => array(

                'nom'    => $profil['attributes']['nom_candidat'],
                'prenom' => $profil['attributes']['prenom_candidat'],
                'parti'  => $profil['attributes']['nom_parti_candidat'],
                'image'  => $profil['attributes']['image_candidat']
            ),

            'mots'      => $this->analysesRepository->getMots($nom),
            'distances' => array()

        );

        foreach ($distances as $cle => $distance) {

            $prenom_candidat = $this->candidatRepository->getPrenom($distance['attributes']['nom_candidat2']);

            $resultat = array(

                'nom_candidat'    => $distance['attributes']['nom_candidat2'],
                'prenom_candidat' => $prenom_candidat['attributes']['prenom_candidat'],
                'valeur_distance' => $distance['attributes']['distance_candidats']
            );

            $analysesCandidat['distances'][] = $resultat;
        }
        
        //dd($analysesCandidat);
        return view('candidat')->with('candidat', $analysesCandidat);
    }
}
