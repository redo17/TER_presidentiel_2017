@extends('master')

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
		<form class="form-horizontal">
			<div class="form-group">
			  	<div class="col-lg-12">
			    	<input type="text" class="form-control" id="inputSearch" placeholder="Rechercher un mot, un candidat...">
			  	</div>
			</div>
			<button type="submit" class="btn btn-primary">Rechercher</button>
		</form>
	</div>
</div>

<hr class="ligne">
	
<!-- Zone de sélection de candidats -->
<div class="row">

	<div class="col-lg-12">
	    <h3>Sélection d'un candidat</h3>
	</div>

    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a class="thumbnail" href="#">
            <img class="img-responsive" src="https://pbs.twimg.com/profile_images/692079601200295941/rCfOm6nc_400x400.jpg" alt="">
        </a>
        <legend>Nathalie ARTHAUD</legend>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a class="thumbnail" href="#">
            <img class="img-responsive" src="https://pbs.twimg.com/profile_images/845387075486728193/6HA8xTgS.jpg" alt="">
        </a>
        <legend>François ASSELINEAU</legend>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a class="thumbnail" href="#">
            <img class="img-responsive" src="https://pbs.twimg.com/profile_images/2511020171/orf7onnkacicyn8odg26.jpeg" alt="">
        </a>
        <legend>Jacques CHEMINADE</legend>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a class="thumbnail" href="#">
            <img class="img-responsive" src="https://pbs.twimg.com/profile_images/672054572601483265/xRGGJGn1.jpg" alt="">
        </a>
        <legend>Nicolas DUPONT-AIGNAN</legend>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a class="thumbnail" href="#">
            <img class="img-responsive" src="https://pbs.twimg.com/profile_images/845229246280863745/U3jdwWGz.jpg" alt="">
        </a>
        <legend>François FILLON</legend>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a class="thumbnail" href="#">
            <img class="img-responsive" src="https://pbs.twimg.com/profile_images/846787408712646657/cxRnGUlS.jpg" alt="">
        </a>
        <legend>Benoît HAMON</legend>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a class="thumbnail" href="#">
            <img class="img-responsive" src="https://pbs.twimg.com/profile_images/847165852315201538/UD8nO_nH.jpg" alt="">
        </a>
        <legend>Jean LASSALLE</legend>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a class="thumbnail" href="#">
            <img class="img-responsive" src="https://pbs.twimg.com/profile_images/853280204713754624/i5oIAxWk.jpg" alt="">
        </a>
        <legend>Marine LE PEN</legend>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a class="thumbnail" href="#">
            <img class="img-responsive" src="https://pbs.twimg.com/profile_images/834424630630817795/TfyS4uXb.jpg" alt="">
        </a>
        <legend>Emmanuel MACRON</legend>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a class="thumbnail" href="#">
            <img class="img-responsive" src="https://www.franceinter.fr/s3/cruiser-production/2017/04/ab054b0f-b4c6-4ad9-bdeb-01ad3e55b2a7/400x400_000_lz83e.jpg" alt="">
        </a>
        <legend>Jean-Luc MELENCHON</legend>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a class="thumbnail" href="#">
            <img class="img-responsive" src="https://pbs.twimg.com/profile_images/722778700136259585/SBDHHEwg.jpg" alt="">
        </a>
        <legend>Philippe POUTOU</legend>
    </div>
</div>
@stop