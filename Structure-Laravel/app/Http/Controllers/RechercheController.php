<?php

namespace App\Http\Controllers;

use App\Http\Requests\RechercheRequest;
use App\Repositories\RechercheRepository;
use App\Repositories\CandidatRepository;
use App\Candidat;

/**
 * Contrôleur pour la fonction recherche de mot (table "resultat_mot").
 * Généré automatiquement avec la comande "sudo php artisan make:controller CandidatController --resource".
 */
class RechercheController extends Controller
{
	protected $rechercheRepository;

	public function __construct(RechercheRepository $rechercheRepository) {

		$this->rechercheRepository = $rechercheRepository;
	}


	/**
     * Récupère les occurences du mot envoyé par la requête pour chaque candidat.
     * Traite ensuite quelques données pour avoir le maximum d'informations.
     *
     * @param  RechercheRequest  $request  La requête de la recherche contenant le mot. 
     * @return \Illuminate\Http\Response La vue de résultat de recherche.
     */
    public function recherche(RechercheRequest $request) {

    	$occurencesMot = $this->rechercheRepository->getOccurencesMot($request->input('recherche'));

    	// Création d'un tableau contenant des données utiles.
    	$resultatsRecherche = array(

			'mot'       => $request->input('recherche'),
			'vide'		=> false,
			'resultats' => array()
    	);

    	// Si il n'y a aucune occurence du mot chez les candidats.
    	if ($occurencesMot->count() <= 0) {

    		$resultatsRecherche['vide'] = true;
    		$donnees = $resultatsRecherche;

    	} else {

    		// Complétion du résultat de la recherche avec toutes les données.
    		$donnees = $this->completerResultatRecherche($occurencesMot, $resultatsRecherche);
    	}

    	return view('resultat-recherche')->with('resultatRecherche', $donnees);
    }


    /**
     * Complète le résultat renvoyé par le modèle lors de la recherche d'un mot.
     * (Ajout de données utiles et nécessaires pour la vue).
     *
     * @param  Array  $resultatsModel  Le tableau renvoyé par le modèle.
     * @param  Array  $resultatsRecherche  Le tableau crée contenant le résultat de la recherche.
     * @return Array $resultatsRecherche Le tableau résultat complété.
     */
    public function completerResultatRecherche($occurencesMot, $resultatsRecherche) {

    	// Récupération de tous les candidats.
    	$candidatRepository = new CandidatRepository(new Candidat());
    	$candidats = $candidatRepository->getAll();

    	// Pour la prise en compte de tous les candidats.
    	$candidatsRanges = array();
    	$i = 0;

    	// Association des prénoms aux noms des candidats renvoyés par la recherche.
    	foreach ($occurencesMot as $resultat) {

    		$candidat = $candidatRepository->getByName($resultat['attributes']['nom_candidat']);

    		$resultatsRecherche['resultats'][$i] = array(

    			'nom_candidat' 	    	 => $resultat['attributes']['nom_candidat'],
    			'prenom_candidat'  		 => $candidat['prenom_candidat'],
    			'nombre_occurences' 	 => $resultat['attributes']['compte_resultat'],
    			'pourcentage_occurences' => ($resultat['attributes']['compte_resultat'] * 100) / $occurencesMot[0]['attributes']['compte_resultat']
    		);

    		$candidatsRanges[] = $candidat['nom_candidat'];

    		$i++;
    	}

		// Association des candidats restants au résultat de la recherche.
		// (si il en reste).
		if (sizeof($candidatsRanges) == sizeof($candidats)) {

			return $resultatsRecherche;

		} else {

			foreach ($candidats as $candidat) {
			
				if (!in_array($candidat->nom_candidat, $candidatsRanges)) {

					$resultatsRecherche['resultats'][$i] = array(

						'nom_candidat'   => $candidat->nom_candidat,
						'prenom_candidat'  	     => $candidat->prenom_candidat,
						'nombre_occurences'      => 0,
						'pourcentage_occurences' => 0
					);

					$i++;
				}
			}
		}

		return $resultatsRecherche;
    }
}