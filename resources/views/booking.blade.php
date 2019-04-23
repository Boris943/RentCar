<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <style>
         body{
            background: url("/pictures/asphalt.jpg")no-repeat;
            background-size:cover; 
            height: 100vh;
            color:white;
            background-attachment: fixed;
        }
      .bg-transparent{
                background: transparent !important;
            }
    </style>
<body>

    
    <div class="container">
            
        <span class="mx-3">Korak 2</span>
    
    @if ($nonBookedVehicles)
        
    @foreach ($nonBookedVehicles as $item)
    <div class="card my-3 bg-transparent border-light">
            <div class="card-header">
                Id auta: {{$item->id}} <br>
                Naziv auta: {{$item->car_name}}
            </div>
            <div class="card-body border-light">
               <strong> Broj vrata: {{$item->doors}} <br>
                Broj sjedista: {{$item->seats}} <br>
                Prtljag: {{$item->luggage}} <br>
                Gorivo: {{$item->fuel}} <br>
                Mjenjac: {{$item->transmission}} <br>
                Klima: @if($item->ac==1) Ima @else Nema @endif <br>
                Cjena po danu: {{$item->price}} € </strong>

                 <span class="float-right"><a href="/vehicles/{{$item->id}}" class="btn btn-primary">Izaberi</a></span>    
            </div>
        </div>
        @endforeach
    @else
       <h1>
           Nema Slobodnih Vozila u ovom terminu
       </h1> 
    @endif
    
    </div>
    <script src="{{ asset('js/app.js') }}" ></script>
</body>
</html>

 