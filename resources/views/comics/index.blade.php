@extends('layouts.app')
@section('title', 'i miei comics')

@section('content')

    <div class="container">
        <p>
            @if (session('modifica'))
                <div class="alert alert-success">
                    {{ session('modifica') }}
                </div>
            @endif
            @if (session('deleted'))
                <div class="alert alert-success">
                    {{ session('deleted') }}
                </div>
            @endif
        </p>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comicz as $comic)
                    <tr>
                        <th scope="row"> {{ $comic->id}}</th>
                        <td>{{ $comic->title}}</td>
                        <td>{{ $comic->description}}</td>
                        <td>
                            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Show</a>
                            
                            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">Edit</a>
                            
                            <form action="{{ route ('comics.destroy', $comic->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="d-inline-block btn btn-danger">
                            </form>
                            
                        </td>
                    </tr>  
                    
                @endforeach

                            
            </tbody>
          </table>

          <div>
              {{ $comicz->links() }}
          </div>
    </div>

    
@endsection