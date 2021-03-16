@extends('layouts.app')

@section('titolo','contatti')

@section('content')
    <h1>Contatti</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur laudantium quod aperiam sed alias exercitationem veritatis in voluptatibus rem culpa.
    </p>
    <p>{{ $email }} - {{ $tel }}</p>
@endsection

