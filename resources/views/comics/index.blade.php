


@extends('layouts.app')

@section('main-content')
  <section class="container mt-5">
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
                
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- Se è stata usata la paginazione --}}
    {{ $comics->links('pagination::bootstrap-5') }}
  </section>
@endsection
