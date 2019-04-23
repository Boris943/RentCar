<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
        <style>
            body{
                background: url("/pictures/asphalt.jpg") center center no-repeat;
                background-size:cover; 
                height: 100vh;
                color: white;
            }
            h1{
                font-size: 70px;
            }
        </style>  
    </head>

    <body>
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
 
        <div class="d-flex">
            <div class="mx-3 my-3">
                Korak 1
                <form action="/booking" method="post">
                    @csrf
                    <div class="my-3 mx-3">
                        <label><strong> Mjesto preuzimanja :</strong></label>
                        <input class="w-100" name="pick_up_location" type="text">
                    </div>
                    <div class="my-3 mx-3">
                        <label><strong> Mjesto Vracanja :</strong></label>
                        <input class="w-100" name="drop_off_location" type="text">
                    </div>
                    <div class="my-3 mx-3">
                        <label><strong> Datum Preuzimanja :</strong></label>
                        <input class="w-100" onchange="myFunction()" id="mdi" name="pick_up_date" type="date">
                    </div>
                    <div class="my-3 mx-3">
                        <label><strong> Datum Vracanja :</strong></label>
                        <input class="w-100" id="mdd" name="drop_off_date" type="date">
                    </div>
                    <div class="my-3 mx-3">
                        <label><strong> Vrijeme Preuzimanja:</strong></label>
                        <input class="w-100" name="pick_up_time" type="time">
                    </div>
                    <div class="my-3 mx-3">
                        <label><strong> Vrijeme Vracanja:</strong></label>
                        <input class="w-100" name="drop_off_time" type="time">          
                    </div>
                    <button type="submit" class=" my-3 mx-3 btn btn-primary">Potrazi vozilo</button>
                </form>
            </div>
                 
            <div>
                <h1>Rent a Car</h1>
                <a href="#" class="btn btn-primary">O nama</a>
                <a href="#" class="btn btn-primary">Uslovi Rentiranja</a>
            </div>
        
        </div> 

        
        <script src="{{ asset('js/app.js') }}" ></script>
        <script>
        var now = new Date(),
            minDate = now.toISOString().substring(0,10);
        $('#mdi').prop('min', minDate);  
            
            function myFunction() {
                var then = new Date($('#mdi').val()),
                minDate = then.toISOString().substring(0,10);
                $('#mdd').prop('min',minDate);
            } 
        </script>
        </body>
</html>
