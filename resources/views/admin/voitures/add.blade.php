@extends('admin.layouts.layouts')
@section('content')

<div class="container" >
    <a href={{route('table')}} class="btn btn-primary">Back</a>
</div>
<div class="container mt-5">
        <h2>Formulaire de Données</h2>
        <form action="{{route('add')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="image" class="form-label">Image:</label>
                <input class="form-control" type="file" id="image" name="image"  required>
            </div>
            <div class="mb-3">
                <label for="titre" class="form-label">Titre:</label>
                <input type="text" class="form-control" id="titre" name="titre" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price:</label>
                <input type="text" class="form-control" id="price" name="price" required>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
</div>
@endsection
