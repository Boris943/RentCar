@extends('layouts.app')

@section('content')
<div class="container justify-content-center">
    <table class="table">
        <tr>
            <th>Id Auta</th>
            <th>Status</th>
            <th>Akcija</th>
        </tr>
        @foreach ($vehicles as $item)
        <tr>
            <th>{{$item->id}}</th>
            <th>
            @if ($item->booked)
            <i class="fas fa-times fa-3x"></i>
            @else
            <i class="fas fa-check fa-2x"></i>
                @endif
            </th>
            <th>
                <form action="/home/listCar/{{$item->id}}" method="get">
                <button type="submit" class="btn btn-default">Uredi</button>
                </form>
                <form action="/home/listCar/{{$item->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-warning">Obrisi</button>
                </form>
            </th>
        </tr>
        @endforeach
    </table>
</div>
@endsection