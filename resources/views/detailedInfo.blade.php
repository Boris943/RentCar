@extends('layouts.app')

@section('content')
<div class="container justify-content-center">
        <a href="/home/listReq" class="btn btn-secondary mx-3 my-3">Nazad</a>
    <table class="table">
        <tr>
            <th>Lokacija Preuzimanja</th>
            <th>Datum Preuzimanja</th>
            <th>Vrijeme Preuzimanja</th>
            <th>Lokacija Ostavljanja</th>
            <th>Datum Ostavljanja</th>
            <th>Vrijeme Ostavljanja</th>
            <th>ID auta</th>
            <th>Cijena</th>
            <th>Ime i prezime</th>
            <th>Godiste</th>
            <th>Email</th>
            <th>Telefonski Broj</th>
            <th>Zemlja</th>
            <th>Poruka</th>
        </tr>
        <tr>
            <th>{{$req->pick_up_location}}</th>
            <th>{{$req->pick_up_date}}</th>
            <th>{{$req->pick_up_time}}</th>
            <th>{{$req->drop_off_location}}</th>
            <th>{{$req->drop_off_date}}</th>
            <th>{{$req->drop_off_time}}</th>
            <th>{{$req->car_id}}</th>
            <th>{{$req->sum_price}}</th>
            <th>{{$req->full_name}}</th>
            <th>{{$req->age}}</th>
            <th>{{$req->email}}</th>
            <th>{{$req->phone_num}}</th>
            <th>{{$req->country}}</th>
            <th>{{$req->message}}</th>
        </tr>    
    </table>
</div>

@endsection