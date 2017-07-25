@foreach($users as $user)
	<li>{!! $user['nom'] !!}</li>
	<li>{!! $user['age'] !!}</li>
@endforeach