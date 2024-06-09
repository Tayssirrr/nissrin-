
@extends('admin.layouts.layouts')
@section('content')

<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">nameVoiture</th>
                <th scope="col">name</th>
                <th scope="col">prenom</th>
                <th scope="col">telephone</th>
                <th scope="col">email</th>
                <th scope="col">carteNationale</th>
                <th scope="col">date_debut</th>
                <th scope="col">date_fin</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($resou as $voiture)
                    <tr>
                        <td>{{$voiture->id}}</td>
                        <td>{{$voiture->nameVoiture}}</td>
                        <td>{{$voiture->name}}</td>
                        <td>{{$voiture->prenom}}</td>
                        <td>{{$voiture->telephone}}</td>
                        <td>{{$voiture->email}}</td>
                        <td>
                        <a href="{{ route('downloadImage', $voiture->carteNationale) }}" class="btn btn-primary mt-2"><img src="/images/{{$voiture->carteNationale}}" width="100px"  alt=""/></a>
                        </td>
                        <td>{{$voiture->date_debut}}</td>
                        <td>{{$voiture->date_fin}}</td>
                        <td>

                            <form action="{{route('d_reser',$voiture->id)}}" method="POST">
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
