@extends('master')

<!-- Titre de l'onglet -->
@section('titre')
    Presid-Analsyse | Recherche
@endsection

@section('contenu')

	<header>
		<h3 class="centrer">Résultat de la recherche du mot "<i>{{ $mot }}</i> "</h3>
		<p class="lead centrer">Ci-dessous l'histogramme d'occurences du mot pour chaque candidat.</p>
	</header>

	<!-- Histogramme -->
	<section>
		<table class="table" id="occurences">
			<tbody>
				<tr>
				  <td>Nicolas Dupont-Aignant</td>
				  <td class="barre">
				  	<div class="progress">
  						<div class="progress-bar" style="width: 100%;">128</div>
					</div>
				  </td>
				</tr>
				<tr>
				  <td>Marine Le Pen</td>
				  <td class="barre">
				  	<div class="progress">
  						<div class="progress-bar" style="width: 70%;">128</div>
					</div>
				  </td>
				</tr>
				<tr>
				  <td>Jean-Luc Mélenchon</td>
				  <td class="barre">
				  	<div class="progress">
  						<div class="progress-bar" style="width: 60%;">128</div>
					</div>
				  </td>
				</tr>
				<tr>
				  <td>Philippe Poutou</td>
				  <td class="barre">
				  	<div class="progress">
  						<div class="progress-bar" style="width: 50%;">50</div>
					</div>
				  </td>
				</tr>
				<tr>
				  <td>Jacques Cheminade</td>
				  <td class="barre">
				  	<div class="progress">
  						<div class="progress-bar" style="width: 30%;">30</div>
					</div>
				  </td>
				</tr>
				<tr>
				  <td>François Fillion</td>
				  <td class="barre">
				  	<div class="progress">
  						<div class="progress-bar" style="width: 10%;">12</div>
					</div>
				  </td>
				</tr>
				<tr>
				  <td>François Asselineau</td>
				  <td class="barre">
				  	<div class="progress">
  						<div class="progress-bar" style="width: 7%;">10</div>
					</div>
				  </td>
				</tr>
				<tr>
				  <td>Emmanuel Macron</td>
				  <td class="barre">
				  	<div class="progress">
  						<div class="progress-bar" style="width: 5%;">5</div>
					</div>
				  </td>
				</tr>
				<tr>
				  <td>Nathalie Arthaud</td>
				  <td class="barre">
				  	<div class="progress">
  						<div class="progress-bar" style="width: 3%;">3</div>
					</div>
				  </td>
				</tr>
				<tr>
				  <td>Benoit Hamon</td>
				  <td class="barre">
				  	<div class="progress">
  						<div class="progress-bar" style="width: 1%;">1</div>
					</div>
				  </td>
				</tr>
				<tr>
				  <td>Jean Lassalle</td>
				  <td class="barre">
				  	<div class="progress">
  						<div class="progress-bar" style="width: 0%;">0</div>
					</div>
				  </td>
				</tr>
			</tbody>
		</table> 
	</section>

@endsection