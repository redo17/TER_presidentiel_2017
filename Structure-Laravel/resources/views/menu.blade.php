<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		    <span class="sr-only">Toggle navigation</span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="#">Titre du site</a>
		</div>
		
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
		    <li><a href="{{ route('accueil') }}">Accueil <span class="sr-only">(current)</span></a></li>
		    <li class="dropdown">
		      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Candidats <span class="caret"></span></a>
		      <ul class="dropdown-menu" role="menu">
		        <li><a href="{{ route('candidat', ['nom' => 'Arthaud']) }}">ARTHAUD Nathalie</a></li>
		        <li><a href="{{ route('candidat', ['nom' => 'Asselineau']) }}">ASSELINEAU François</a></li>
		        <li><a href="{{ route('candidat', ['nom' => 'Cheminade']) }}">CHEMINADE Jacques</a></li>
		        <li><a href="{{ route('candidat', ['nom' => 'Dupont-Aignan']) }}">DUPONT-AIGNAN Nicolas</a></li>
		        <li><a href="{{ route('candidat', ['nom' => 'Fillion']) }}">FILLION François</a></li>
		        <li><a href="{{ route('candidat', ['nom' => 'Hamon']) }}">HAMON Benoît</a></li>
		        <li><a href="{{ route('candidat', ['nom' => 'Lassalle']) }}">LASSALLE Jean</a></li>
		        <li><a href="{{ route('candidat', ['nom' => 'Le Pen']) }}">LE PEN Marine</a></li>
		        <li><a href="{{ route('candidat', ['nom' => 'Macron']) }}">MACRON Emmanuel</a></li>
		        <li><a href="{{ route('candidat', ['nom' => 'Mélenchon']) }}">MELENCHON Jean-Luc</a></li>
		        <li><a href="{{ route('candidat', ['nom' => 'Poutou']) }}">POUTOU Philippe</a></li>
		      </ul>
		    </li>
		  </ul>
		  <ul class="nav navbar-nav navbar-right">
		    <li><a href="{{ route('infos') }}">Infos</a></li>
		  </ul>
		</div>
	</div>
</nav>