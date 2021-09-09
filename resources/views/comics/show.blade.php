@extends('layouts.app')

@section('title', 'dettaglio prodotto')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1> {{ $comic->title }}</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-m-6">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->thumb }}">
            </div>
            <div class="col-m-6">
                <p> {{ $comic->series }} </p>
            </div>
        </div>

        <button type="button" class="btn btn-primary">
            {{ $comic->price }} <span class="badge bg-secondary">€</span>
        </button>

        
    </div>

    
@endsection