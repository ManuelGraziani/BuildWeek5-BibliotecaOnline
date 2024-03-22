@extends('layouts.layout')
@section('title', 'Aggiungi Libro')

@section('content')
<form method="POST" action="/books">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="description">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Autore</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="author">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Autore citta</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="city">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Categoria</label>
        <select class="form-select" aria-label="Default select example" name="category">
            <option selected>Scegli categoria</option>
            <option value="1" name="category">Horror</option>
            <option value="2" name="category">Fantasy</option>
            <option value="3" name="category">Fiction</option>
            <option value="4" name="category">Romance</option>
            <option value="5" name="category">Mystery</option>
            <option value="6" name="category">History</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="year" class="form-label">Anno</label>
        <input type="number" class="form-control" id="exampleInputPassword1" name="year">
    </div>
    <div class="mb-3">
        <label for="pages" class="form-label">Pagine</label>
        <input type="number" class="form-control" id="exampleInputPassword1" name="pages">
    </div>
    <div class="mb-3">
        <label for="numcopies" class="form-label">Numero copie</label>
        <input type="number" min="1" max="5" class="form-control" id="exampleInputPassword1" name="numcopies">
    </div>
    <button type="submit" class="btn btn-outline-secondary">Aggiungi</button>
</form>
@endsection