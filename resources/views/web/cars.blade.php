@extends('web.layouts')
@section('content')

<div class="container cars mt-5" id="booknow">
            <p class="title text text-center" >The number one car rental in Morocco
            Discover our  cars</p>
            <p class="title1 text text-center">Discover our  cars</p>

            <div class="row mt-5 div1">
                @foreach ($voitures as $voiture)

                <div class="col-md-4">
                    <div class="card border-0">
                        <img src="/images/{{$voiture->image}}" class="img" alt="">
                        <div class="card-body">
                            <p class="text text-center" >{{$voiture->titre}}</p>
                            <p class="text text-center">{{$voiture->price}}</p>
                        </div>
                        <a href={{route('reserver',$voiture->id)}} class="w-100 text-center reserver" >Reserver</a>
                    </div>
                </div>
                @endforeach

            </div>
           
    </div>

@endsection
