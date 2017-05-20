@extends('master')

<!-- Titre de l'onglet -->
@section('titre')
    Presid-Analyses | Candidat {{ $candidat['profil']['nom'] }}
@endsection

@section('contenu')
<div class="row">
	<div class="col-lg-6">
		<!-- En-tête -->
		<header class="centrer">
			<h3>{{ $candidat['profil']['prenom'] }} {{ $candidat['profil']['nom'] }}</h3>
			<img src="{{ asset($candidat['profil']['image']) }}" id="image-candidat">
			<h4>{{ $candidat['profil']['parti'] }}</h4>
		</header>
	</div>

	<!-- Nuage de mots -->
	<div class="col-lg-6 centrer">
	    <p class="lead isoler-haut">Quels sont les mots les plus présents dans le vocabulaire du candidat ?</p>
		<div class="col-lg-12">
			<div style="border: 2px solid black; height: 200px; overflow-y: scroll;">
			<?php foreach ($candidat['mots'] as $cle => $mot) { ?>
				<p><?php echo $mot['attributes']['valeur_mot'] . ' => ' . $mot['attributes']['compte_resultat']; ?></p>
			<?php } ?>
			</div>
		</div>
	</div>
</div>

<hr class="ligne">

<!-- Distance par rapport aux autres candidats -->
<div class="row">

	<div class="col-lg-12">
	    <h3 class="centrer">Proximité par rapport aux autres candidats</h3>
	    <!--<p class="lead">De quel candidat {{ $candidat['profil']['prenom'] }} {{ $candidat['profil']['nom'] }} est le plus proche ?</p>-->
	    <p> {{ $candidat['profil']['prenom'] }} {{ $candidat['profil']['nom'] }} < 
	    	<?php foreach ($candidat['distances'] as $cle => $distance) { 
	    		echo $distance['prenom_candidat'] . ' ' . $distance['nom_candidat'] . ' < ';
	    	} ?>
	    </p>
	</div>
</div>
 
@endsection