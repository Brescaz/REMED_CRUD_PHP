@foreach($projets as $projet)
	<li>{!! $projet['titre_projet'] !!}</li>
	<li>{!! $projet['contenu_projet'] !!}</li>
@endforeach