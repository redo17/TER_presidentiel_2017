@extends('master')

@section('contenu')

<!-- En-tête titre + texte) -->
<header>
	<h1>Page de test pour la communication avec la base</h1>
	<h2>Nom : {{ $candidat->nom_candidat }}</h2>
	<h2>Prénom : {{ $candidat->prenom_candidat }}</h2>
	<h2>Parti : {{ $candidat->nom_parti_candidat }}</h2>
	<h2>ID Twitter : {{ $candidat->id_twitter_candidat }}</h2>
	<img src="{{ $candidat->image_candidat }}">
</header>
 
@stop