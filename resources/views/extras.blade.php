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
            color:white;
        }
        .bg-transparent{
                background: transparent !important;
            }
    </style>  
<body>
     <div class="container">
         <div class="card my-5 bg-transparent">
             Korak 3
                 <h1>Extra dodaci</h1>
                 <form action="/extras" method="post">
                    @csrf
                    @foreach ($ext as $item)
                    <input type="checkbox" value="{{ $item->id }}" name="extras[]">{{ $item->extra_name }} <br>
                @endforeach
                <button type="submit" class="btn btn-primary">Dalje</button>
            </form>
         </div>
     </div>
     <script src="{{ asset('js/app.js') }}" ></script>
</body>
</html>