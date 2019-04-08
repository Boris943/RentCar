@extends('layouts.app')

@section('content')
<div class="container justify-content-center">
 <div class="card">
        <form action="/home/addCar" method="POST">
            <div class="row mx-3">
                @csrf
             <div class="col-sm-12 col-md-6 col-lg-4">
                 <label> Naziv Auta:</label>
                 <input class="form-control" name="car_name" type="text">
             </div>
             <div class="col-sm-12 col-md-6 col-lg-4">
                 <label>Tip Auta:</label>
                 <input class="form-control" name="type" type="text">
             </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <label>Prtljag:</label>
                    <select class="form-control" name="luggage">
                            <option value="5">5</option>
                            <option value="4">4</option>
                            <option value="3">3</option>
                            <option value="2">2</option>
                        </select>    
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <label>Broj Vrata:</label>
                    <select class="form-control" name="doors">
                    <option value="5">5</option>
                    <option value="4">4</option>
                    <option value="3">3</option>
                    <option value="2">2</option>
                </select>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <label>Broj Sjedista:</label>
                    <select class="form-control" name="seats">
                        <option value="8">8</option>
                            <option value="7">7</option>
                            <option value="6">6</option>
                            <option value="5">5</option>
                            <option value="4">4</option>
                            <option value="3">3</option>
                            <option value="2">2</option>
                    </select>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <label>Mjenjac:</label>
                    <select class="form-control" name="transmission">
                        <option value="Manual">Manual</option>
                        <option value="Automatic">Automatic</option>
                        <option value="Tiptronic">Tiptronic</option>
                    </select>    
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <label>Tip Goriva:</label>
                    <select class="form-control" name="fuel">
                        <option value="Dizel">Dizel</option>
                        <option value="Benzin">Benzin</option>
                    </select>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <label>Klima:</label>
                    <select class="form-control" name="ac">
                    <option value="1">Ima</option>    
                    <option value="0">Nema</option>    
                </select>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <label>Cijena:</label>
                    <input class="form-control" name="price" type="number" step="0.01">                                                   
                </div>
        <button class="btn btn-danger my-3 form-control" type="submit">Add Car</button>
            </div>
        </form>
 </div>   
</div>    

@endsection