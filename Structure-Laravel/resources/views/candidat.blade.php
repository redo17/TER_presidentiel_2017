@extends('master')

@section('titre')
    Candidat {{ $candidat->nom_candidat }}
@endsection

@section('contenu')

<!-- En-tête titre + texte) -->
<header>
	<h2>Page de test pour la communication avec la base</h2>
	<h3>Nom : {{ $candidat->nom_candidat }}</h3>
	<h3>Prénom : {{ $candidat->prenom_candidat }}</h3>
	<h3>Parti : {{ $candidat->nom_parti_candidat }}</h3>
	<h3>ID Twitter : {{ $candidat->id_twitter_candidat }}</h3>
	<img src="{{ $candidat->image_candidat }}">
</header>
 
@endsection