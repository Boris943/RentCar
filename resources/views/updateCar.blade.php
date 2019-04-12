@extends('layouts.app')

@section('content')
<div class="container justify-content-center">
 <div class="card">
        <form action="/home/listCar/{{$vehicle->id}}" method="POST">
            <div class="row mx-3">
                @csrf
                @method('PUT')
             <div class="col-sm-12 col-md-6 col-lg-4">
                 <label> Naziv Auta:</label>
                 <input class="form-control" name="car_name" type="text" value="{{$vehicle->car_name}}">
             </div>
             <div class="col-sm-12 col-md-6 col-lg-4">
                 <label>Tip Auta:</label>
                 <input class="form-control" name="type" type="text" value="{{$vehicle->type}}">
             </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <label>Prtljag:</label>
                    <select class="form-control" name="luggage">
                            <option value="5" {{ ($vehicle->luggage == 5 ? "selected":"") }}>5</option>
                            <option value="4" {{ ($vehicle->luggage == 4 ? "selected":"") }}>4</option>
                            <option value="3" {{ ($vehicle->luggage == 3 ? "selected":"") }}>3</option>
                            <option value="2" {{ ($vehicle->luggage == 2 ? "selected":"") }}>2</option>
                        </select>    
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <label>Broj Vrata:</label>
                    <select class="form-control" name="doors">
                    <option value="5" {{ ($vehicle->doors == 5 ? "selected":"") }}>5</option>
                    <option value="4" {{ ($vehicle->doors == 4 ? "selected":"") }}>4</option>
                    <option value="3" {{ ($vehicle->doors == 3 ? "selected":"") }}>3</option>
                    <option value="2" {{ ($vehicle->doors == 2 ? "selected":"") }}>2</option>
                </select>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <label>Broj Sjedista:</label>
                    <select class="form-control" name="seats">
                        <option value="8">8</option>
                            <option value="7" {{ ($vehicle->seats == 7 ? "selected":"") }}>7</option>
                            <option value="6" {{ ($vehicle->seats == 6 ? "selected":"") }}>6</option>
                            <option value="5" {{ ($vehicle->seats == 5 ? "selected":"") }}>5</option>
                            <option value="4" {{ ($vehicle->seats == 4 ? "selected":"") }}>4</option>
                            <option value="3" {{ ($vehicle->seats == 4 ? "selected":"") }}>3</option>
                            <option value="2" {{ ($vehicle->seats == 3 ? "selected":"") }}>2</option>
                    </select>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <label>Mjenjac:</label>
                    <select class="form-control" name="transmission">
                        <option value="Manual"{{ ($vehicle->transmission == "Manual" ? "selected":"") }}>Manual</option>
                        <option value="Automatic"{{ ($vehicle->transmission == "Automatic" ? "selected":"") }}>Automatic</option>
                        <option value="Tiptronic"{{ ($vehicle->transmission == "Tiptronic" ? "selected":"") }}>Tiptronic</option>
                    </select>    
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <label>Tip Goriva:</label>
                    <select class="form-control" name="fuel">
                        <option value="Dizel"{{ ($vehicle->fuel == "Dizel" ? "selected":"") }}>Dizel</option>
                        <option value="Benzin"{{ ($vehicle->fuel == "Benzin" ? "selected":"") }}>Benzin</option>
                    </select>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <label>Klima:</label>
                    <select class="form-control" name="ac">
                    <option value="1"{{ ($vehicle->ac == 1 ? "selected":"") }}>Ima</option>    
                    <option value="0"{{ ($vehicle->ac == 0 ? "selected":"") }}>Nema</option>    
                </select>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <label>Cijena:</label>
                    <input value="{{$vehicle->price}}" class="form-control" name="price" type="number" step="0.01">                                                   
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <label>Status:</label>
                    <select class="form-control" name="booked">
                        <option value="1"{{ ($vehicle->booked == 1 ? "selected":"") }}>Zauzeto</option>    
                        <option value="0"{{ ($vehicle->booked == 0 ? "selected":"") }}>Slobodno</option>    
                    </select>    
                </div>
                

        <button class="btn btn-danger my-3 form-control" type="submit">Uredi Auto</button>
            </div>
        </form>
 </div>   
</div>    

@endsection
