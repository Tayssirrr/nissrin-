@extends('admin.layouts.layouts')
@section('content')
<div class="container" >
    <a href={{route('table')}}>Back</a>
</div>
<div class="container mt-5">
        <h2>Formulaire de Données</h2>
        <form action="{{route('update',$voiture->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="image" class="form-label">Image:</label>
                <input class="form-control" type="file" value={{$voiture->image}} id="image" name="image"  required>
                <img src="/images/{{$voiture->image}}" width="100px" alt="">
            </div>
            <div class="mb-3">
                <label for="titre" class="form-label">Titre:</label>
                <input type="text" class="form-control" id="titre" value={{$voiture->titre}} name="titre" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price:</label>
                <input type="text" class="form-control" id="price" value={{$voiture->price}} name="price" required>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
</div>
@endsection
