@extends('admin.layouts.layouts')
@section('content')
<div class="container" >
    <a href={{route('create')}} class="btn btn-primary m-5" >Add</a>
</div>
<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Image</th>
                <th scope="col">Titre</th>
                <th scope="col">Price</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($voitures as $voiture)
                    <tr>
                        <td>{{$voiture->id}}</td>
                        <td><img src="/images/{{$voiture->image}}" width="100px" /></td>
                        <td>{{$voiture->titre}}</td>
                        <td>{{$voiture->price}}</td>
                        <td>
                            <a href={{route('edit',$voiture->id)}}>Edit</a>
                            <form action="{{route('delete',$voiture->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
