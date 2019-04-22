@extends('layouts.app')

@section('content')
<div class="container justify-content-center">
        <a href="/home/listReq" class="btn btn-secondary mx-3 my-3">Nazad</a>
    <table class="table">
        <tr>
            <th>Lokacija Preuzimanja</th>
            <td>{{$req->pick_up_location}}</td>    
        </tr>
        <tr>    
            <th>Datum Preuzimanja</th>
            <td>{{$req->pick_up_date}}</td>
        </tr>
        <tr>    
            <th>Vrijeme Preuzimanja</th>
            <td>{{$req->pick_up_time}}</td>
        </tr>
        <tr>   
            <th>Lokacija Ostavljanja</th>
            <td>{{$req->drop_off_location}}</td>
        </tr>
        <tr>
            <th>Datum Ostavljanja</th>
            <td>{{$req->drop_off_date}}</td>            
        </tr>
        <tr>
            <th>Vrijeme Ostavljanja</th>
            <td>{{$req->drop_off_time}}</td>
        </tr>
        <tr>
            <th>ID auta</th>
            <td>{{$req->car_id}}</td>
        </tr>
        <tr>
            <th>Cijena</th>
            <td>{{$req->sum_price}}</td>
        </tr>
        <tr>
            <th>Ime i prezime</th>
            <td>{{$req->full_name}}</td>
        </tr>
        <tr>
            <th>Godiste</th>
            <td>{{$req->age}}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{$req->email}}</td>
        </tr>
        <tr>
            <th>Telefonski Broj</th>
            <td>{{$req->phone_num}}</td>
        </tr>
        <tr>
            <th>Zemlja</th>
            <td>{{$req->country}}</td>
        </tr>
        <tr>
            <th>Poruka</th>
            <td>{{$req->message}}</td>
        </tr>
    </table>

</div>

@endsection