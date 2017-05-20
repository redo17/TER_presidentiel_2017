@extends('master')

<!-- Titre de l'onglet -->
@section('titre')
    Presid-Analyses | Accueil
@endsection

@section('contenu')

<!-- En-tête titre + texte) -->
<header>
	<h2>L'analyse des campagnes présidentielles</h2>
	<p class="lead justifier">Durant les campagnes présidentielles, un grand flux de données circule sur les réseaux sociaux officiels des candidats (tweets, messages, références, infos...). Présid-Analyses regroupe toutes ces données lexicales afin de les analyser et d'effectuer des traitements pertinents en fonction de chaque candidat. Ainsi vous pourrez, sur ce site, visualiser la distance qui sépare un candidat d'un autre ou connaître le mot qu'il a le plus employé ou encore même rechercher un mot et savoir quel est le candidat qui l'a le plus utilisé. Tout cela en se basant sur une lexicographie des données diffusées pendant les campagnes présidentielles.</p>
</header>
 
<!-- Zone de recherche -->
<div class="row">
	<div class="col-lg-12">
	    <h3>Recherche lexicale</h3>
	    <p class="lead">Quel est le candidat qui a le plus utilisé ce mot ?</p>
	</div>
	<div class="col-lg-12">
		{!! Form::open(['url' => 'recherche', 'class' => 'form-horizontal']) !!}
			<div class="form-group">
			  	<div class="col-lg-12">
			  		{!! Form::text('recherche', Input::old('recherche'), ['class' => 'form-control', 'placeholder' => 'Rechercher un mot', 'id' => 'recherche']) !!}
			  		{!! $errors->first('recherche', '<div id="erreur-recherche" class="well well-sm">Erreur : :message</div>') !!}
			  	</div>
			</div>
			{!! Form::submit('Rechercher', ['class' => 'btn btn-primary']) !!}
		{!! Form::close() !!}
	</div>
</div>

<hr class="ligne">
	
<!-- Zone de sélection de candidats -->
<div class="row">

	<div class="col-lg-12">
	    <h3>Sélection d'un candidat</h3>
	    <p class="lead">Sélectionnez un candidat pour connaître toutes les analyses qui lui sont associées.</p>
	</div>

    @foreach($listeCandidats as $candidat)
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a class="thumbnail" href="{{ route('candidat', ['nom' => $candidat->nom_candidat]) }}">
            <img class="img-responsive" src="{{ asset($candidat->image_candidat) }}" alt="Image {{ $candidat->nom_candidat }}">
        </a>
        <legend>{{ $candidat->prenom_candidat }} {{ $candidat->nom_candidat }}</legend>
    </div>
    @endforeach
</div>
@endsection