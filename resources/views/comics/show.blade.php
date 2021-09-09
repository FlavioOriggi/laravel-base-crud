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
                <img src="{{ $comic->thumb }}" alt="">
            </div>
            <div class="col-m-6">
                <p></p>
            </div>
        </div>
    </div>

    
@endsection