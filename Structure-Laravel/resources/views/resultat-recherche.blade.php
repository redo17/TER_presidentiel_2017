@extends('master')

<!-- Titre de l'onglet -->
@section('titre')
    Presid-Analyses | Recherche
@endsection

@section('contenu')

	<header>
		<h3 class="centrer">Résultat de la recherche du mot "<i>{{ $resultatRecherche['mot'] }}</i> "</h3>
		<?php if ($resultatRecherche['vide']) { ?>

			<p class="lead centrer">Le mot recherché n'est pas présent dans le contenu lexical des candidats.</p>
			</header>
			<section class="centrer">
				<a href="{{ route('accueil') }}" class="btn btn-primary btn-lg">Retour</a>
			</section>

		<?php } else { ?>

			 <p class="lead centrer">Ci-dessous l'histogramme d'occurences du mot pour chaque candidat.</p>
			</header>

			<!-- Histogramme -->
			<section>
				<table class="table" id="occurences">
					<tbody>
						<?php foreach ($resultatRecherche['resultats'] as $cle => $resultat) { ?>
							<tr>
							  <td><?php echo $resultat['prenom_candidat'] . ' ' . $resultat['nom_candidat']; ?></td>
							  <td class="barre">
							  	<div class="progress">
			  						<div class="progress-bar" 
			  							 style="width: <?php echo $resultat['pourcentage_occurences'] . '%; color: black;';
			  							 	if ($resultat['pourcentage_occurences'] == 0){

			  							 			echo " margin-left: 10px;";

			  							 	} ?>">

			  							 <?php echo $resultat['nombre_occurences']; ?>
			  						</div>
								</div>
							  </td>
							</tr>
						<?php } ?>
					</tbody>
				</table> 
			</section>
		<?php } ?>
@endsection