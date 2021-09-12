@extends('layouts.app')

@section('title', 'creazione comic')

@section('content')
    <div class="container mt-3">
        <h2>inserimento prodotto</h2>
        <form action="{{ route('comics.store') }} " method="post">
            @csrf
            <div class="mb-3">
                <label for="tit" class="form-label">Titolo</label>
                <input type="text" name="title" class="form-control" id="tit" >
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <div class="mb-3">
                <label for="descrizione" class="form-label">Descrizione</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                
            </div>

            <div class="mb-3">
                <label for="img" class="form-label">Image</label>
                <input type="text" name="thumb" class="form-control" id="img">
            </div>

            <div class="mb-3">
                <label for="prezzo" class="form-label">Prezzo</label>
                <input type="text" name="price" class="form-control" id="prezzo">
            </div>

            <div class="mb-3">
                <label for="serie" class="form-label">Serie</label>
                <input type="text" name="series" class="form-control" id="serie">
            </div>

            <div class="mb-3">
                <label for="uscita" class="form-label">Uscita</label>
                <input type="text" name="sale_date" class="form-control" id="uscita">
            </div>

            <div class="mb-3">
                <label for="tipologia" class="form-label">Tipologia</label>
                <select name="type" id="tipologia" class="form-label bg-white">ù
                    <option value="graphic_novel">Graphic novel</option>
                    <option value="comic_book">Comic book</option>                  
                </select>                
            </div>           

           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
@endsection