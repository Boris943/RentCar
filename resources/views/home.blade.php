@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-centar">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body ">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/home/addCar" class="btn btn-secondary">Dodaj auto</a>
                    <a href="/home/listCar" class="btn btn-primary">Pregled auta</a>
                    <a href="#"class="btn btn-success">Obrada zahtjeva</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
