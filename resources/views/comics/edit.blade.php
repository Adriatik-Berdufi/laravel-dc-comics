@extends('layouts.app')

@section('main-content')
    <section class="container" >
        <h1 class="text-center">Edit comic section</h1>
    <form action="{{ route('comics.update' , $comic ) }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="row g-3">
            <div class="col-4">
                <label for="title" class="form-label">Titolo</label>
                <input value="{{$comic->title}}" type="text" class="form-control" id="title" name="title">
            </div>
            <div class="col-4">
                <label for="series" class="form-label">Serie</label>
                <input value="{{$comic->series}}" type="text" class="form-control" id="series" name="series" >
            </div>
            <div class="col-4">
                <label for="type" class="form-label">Tipo</label>
                <input value="{{$comic->type}}" type="text" class="form-control" id="type" name="type" >
            </div>
            <div class="col-12">
                <label for="description" class="form-label">Descrizione</label>
                <textarea value="{{$comic->description}}" class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <div class="col-12">
                <label for="thumb" class="form-label">Image Url</label>
                <input value="{{$comic->thumb}}" type="url" class="form-control" id="thumb" name="thumb" placeholder="https://www.google.com/">
            </div>
            <div class="col-6">
                <label for="price" class="form-label">Prezzo</label>
                <input value="{{$comic->price}}" type="text" class="form-control" id="price" name="price" placeholder="prezzo">
            </div>
            <div class="col-6">
                <label for="sale_date" class="form-label">Data di uscita</label>
                <input value="{{$comic->sale_date}}" type="date" class="form-control" id="sale_date" name="sale_date" >
            </div>
            <div class="col">
                <button class="btn btn-success me-3">Modifica</button>
            </div>
        </div>
    </form>
    </section>
@endsection