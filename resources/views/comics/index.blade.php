@extends('layouts.app')
@section('title', 'i miei comics')

@section('content')

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
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
                            <a href="{{ route('comics.show',['comic' => $comic->id])}}" class="btn btn-primary">Show</a>
                            <a href="" class="btn btn-secondary">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
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