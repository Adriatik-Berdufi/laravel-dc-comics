
@extends('layouts.app')

@section('main-content')
  <section class="container mt-5">
    <a class="btn btn-primary mt-3 mb-4" href="{{ route('comics.create') }}">Crea Nuovo Comic</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tttolo</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Series</th>
                <th scope="col">Data di vendita</th>
                <th scope="col">Tipo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
            <tr>
                <th scope="row">{{ $comic->id }}</th>
                <td>{{ $comic->title }}</td>
                <td>${{ $comic->price }}</td>
                <td>{{ $comic->series }}</td>
                <td>{{ $comic->sale_date }}</td>
                <td>{{ $comic->type }}</td>
                <td><a href="{{ route('comics.show', $comic) }}">vai al comic</a></td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- Se è stata usata la paginazione --}}
    {{ $comics->links('pagination::bootstrap-5') }}
  </section>
@endsection
