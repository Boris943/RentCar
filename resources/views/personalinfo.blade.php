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
            background: url("/pictures/asphalt.jpg") center center no-repeat;
            background-size:cover; 
            height: 100vh;
            color: white;
            }
            .bg-transparent{
                background: transparent !important;
            }
    </style>

<body>
   
    <div class="container">
        <h3>Poslednji korak</h3>

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

       <div class="card bg-transparent">
           <form action="/final" method="POST">
                @csrf
                
                <div class="my-3 mx-3">
                    <label>Ime Prezime:</label>
                    <input name="full_name" class="form-control" type="text">
                </div>  
                <div class="my-3 mx-3">
                    <label>Godina:</label>
                    <input name="age" class="form-control" type="text">    
                    
                </div>
                <div class="my-3 mx-3">
                    <label>Email:</label>
                    <input name="email" class="form-control" type="text">
                </div>
                <div class="my-3 mx-3">
                    <label>Broj telefona:</label>
                    <input name="phone_num" class="form-control" type="text">
                </div>    
                <div class="my-3 mx-3">
                    <label>Drzava:</label>
                    <input name="country" class="form-control" type="text">
                </div>
                <div class="my-3 mx-3">
                    <label>Poruka :</label>
                    <textarea class="form-control" name="message" ></textarea>
                </div>      
                <div class="d-flex justify-content-center">
                <button type="submit" class="my-3 btn btn-danger text-center"> Snimi zahtjev u DB</button>    
                </div>
        </form>
       </div>
</div>
<script src="{{ asset('js/app.js') }}" ></script>
</body>
</html>

