@extends('master')

<!-- Titre de l'onglet -->
@section('titre')
    Accueil
@endsection

@section('contenu')

<!-- En-tête titre + texte) -->
<header>
	<h1>Lorem Ipsum</h1>
	<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet orci diam, eget tristique arcu commodo eu. Nunc pulvinar dui sed massa pretium lobortis. Vestibulum ac vestibulum urna, ac faucibus nisl. Pellentesque vehicula justo sit amet ullamcorper bibendum. Cras et pharetra lacus, at venenatis massa. Aliquam sed imperdiet velit, id pellentesque quam.</p>
</header>
 
<!-- Zone de recherche -->
<div class="row">
	<div class="col-lg-12">
	    <h3>Recherche lexicale</h3>
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
	</div>

    @foreach($listeCandidats as $candidat)
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a class="thumbnail" href="{{ route('candidat', ['nom' => $candidat->nom_candidat]) }}">
            <img class="img-responsive" src="{{ $candidat->image_candidat }}" alt="Image {{ $candidat->nom_candidat }}">
        </a>
        <legend>{{ $candidat->prenom_candidat }} {{ $candidat->nom_candidat }}</legend>
    </div>
    @endforeach
</div>
@endsection