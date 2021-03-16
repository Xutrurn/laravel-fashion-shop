@extends('layouts.app')

@section('titolo','abiti')

@section('content')
    {{-- <h1>Abbigliamento</h1>
    <p>
        @foreach ($abiti as $abito)
            <ul>
                <li>{{ $abito -> marca }}</li>
                <li>{{ $abito -> categoria }}</li>
                <li>{{ $abito -> prezzo }}</li>
                <li>{{ $abito -> colore }}</li>
                <li>{{ $abito -> taglia }}</li>
                <li>{{ $abito -> codice_prodotto }}</li>
            </ul>
        @endforeach
    </p> --}}

    <div class="container mt-5">
        <div class="row">
            @foreach ($abiti as $abito)
            <div class="col-lg-4">
                <div class="card mb-5" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Marca: {{ ucfirst($abito -> marca) }}</h5>
                        <p class="card-text">Categoria: {{ $abito -> categoria }}</p>
                    </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Colore: {{ $abito -> colore }}</li>
                            <li class="list-group-item">Taglia: {{ $abito -> taglia }}</li>
                            <li class="list-group-item">Prezzo: € {{ $abito -> prezzo }}</li>
                        </ul>
                    <div class="card-body">
                        {{-- <a href="#" class="card-link">Link 1</a>
                        <a href="#" class="card-link">Link2</a> --}}
                        <a href="#" class="btn btn-primary">Compra</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>



@endsection

