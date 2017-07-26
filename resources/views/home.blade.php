@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h1>Hello, {{ $auth->name }}</h1>
                    <h3>Votre ID : {{$auth->id}}</h3>

                    {{$auth->name}}.

                    You are logged in with : {!! Auth::user()->email !!}!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
