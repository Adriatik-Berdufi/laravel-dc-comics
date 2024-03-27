@extends('layouts.app')
@section('main-content')
 <section class="container mt-5">
    <a href="{{ route('comics.index') }}" class="btn btn-secondary my-3">Torna alla lista</a>
    <h1>ID{{ $comic->id }}: {{ $comic->title }}</h1>
    <h5>Descrizione</h5>
    <img src="{{ $comic->thumb }}" alt="">
    <p>{{$comic->description}}</p>
 </section>
@endsection
