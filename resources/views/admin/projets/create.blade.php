@extends('layouts.app')

@section('content')
<form method="POST" action="/projets" >



	<input type="text" name="projet_name">
	<input type="text" name="content">
	<input type="submit" name="Create">

</form>
@endsection