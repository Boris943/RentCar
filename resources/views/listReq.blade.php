@extends('layouts.app')

@section('content')
<div class="container justify-content-center">
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Status</th>
            <th>Cijena</th>
            <th>Detaljniji info</th>
            <th></th>
        </tr>
        @foreach ($req as $item)            
            <tr>
                <th>{{$item->id}}</th>
                <th>{{$item->status}}</th>
                <th>{{$item->sum_price}} €</th>
                <th><a href="/home/listReq/detailedInfo/{{$item->id}}"><i class="fas fa-info-circle"></i></a></th>
                @if($item->status =="Ceka se")
                    <th>
                    <div class="d-flex">
                        <form action="/home/listReq/deny/{{$item->id}}" method="post">
                            @csrf
                            <button class="btn mx-3" type="submit"><i class="fas fa-ban"></i></button>
                        </form>
                        <form action="/home/listReq/approved/{{$item->id}}" method="post">
                            @csrf
                            <button class="btn" type="submit"><i class="fas fa-check"></i></button>
                        </form>    
                    </div>
                    </th>
                @endif
            </tr>
        @endforeach
    </table>
</div>
@endsection

