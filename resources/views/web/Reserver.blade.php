@extends('web.layouts')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card border-0">
                <img src="/images/{{$voiture->image}}" style="border-radius: 10px;" alt="Dacia">
            </div>

        </div>
        <div class="col-md-6">
            <form id="orderForm" action={{route('confirmerReserv',$voiture->id)}} method="POST" enctype="multipart/form-data" >
                @csrf
                    <div class="form-section current">
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" name="name" id="firstName" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <label for="familyName">Family name</label>
                            <input type="text" class="form-control" name="prenom" id="familyName" placeholder="Family name">
                        </div>
                        <div class="form-group">
                            <label for="phoneNumber">Phone number</label>
                            <input type="number" class="form-control" name="telephone" id="phoneNumber" placeholder="Phone number">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <label for="email">Carte Nationnale OR Passport</label>
                            <input type="file" class="form-control" name="carteNationale" id="carteNationale" placeholder="carteNationale OR Passwport">
                        </div>
                        <div class="form-group">
                            <label for="email">Date Debut</label>
                            <input type="date" class="form-control" name="date_debut" id="date_debut" placeholder="date_debut">
                        </div>
                        <div class="form-group">
                            <label for="email">Date Fin</label>
                            <input type="date" class="form-control" name="date_fin" id="date_fin" placeholder="date Fin">
                        </div>
                    </div>
                    <div class="form-navigation mt-5 w-100">
                        <button type="submit" class="btn btn-primary w-100 ">Confirmer Reservations</button>
                    </div>
                </form>
        </div>
    </div>
</div>

@endsection
