@extends('layouts.app')



@section('content')
  @if(is_a($data_in_blade,'Illuminate\Database\Eloquent\Collection'))
    @foreach($data_in_blade as $one_line)
      {{$one_line->id}} : {{$one_line->name}} : {{$one_line->age}} ans<br>
    @endforeach
  @else
      {{$data_in_blade->id}} : {{$data_in_blade->name}} : {{$data_in_blade->age}} ans <br>
  @endif
@endsection
