@extends('layouts.app')

@section('content')
    
<div class="container">

        @if ($errors->any())
        <div class="alert alert-danger alert-dissmisable fade show">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            @foreach ($errors->all() as $error)
                <li><strong>{{ $error }}</strong></li>       
            @endforeach
        </div>
    @endif
    
    <form action="/home" method="POST">
        @csrf
        <div>
            <strong><label>Stari Password</label></strong>
            <input class="form-control" type="password" name="old_password">
        </div>
        <div>
            <strong><label>Novi Password</label></strong>
            <input class="form-control" type="password" name="new_password">
        </div>
        <div>
            <strong><label>Potvrdi novi Password</label></strong>
            <input class="form-control" type="password" name="new_password_confirmation">
        </div>
        <div>
            <strong><label>Ime:</label></strong>
            <input class="form-control" type="text" name="name" value="{{ auth()->user()->name }}">
            <strong><label>Email:</label></strong>
            <input class="form-control" type="email" name="email" value="{{ auth()->user()->email }}">
        </div>
        <div class="d-flex justify-content-center my-3">
            <button type="submit" class="btn btn-success">Azuriraj podatke</button>
        </div>
    </form>

</div>

@endsection