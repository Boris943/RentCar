<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .greenyellow{
                background-color: greenyellow;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
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
 

       <div class="position-ref full-height">
            <div class="d-flex justify-content-between form-group">
                <form action="/booking" method="post">
                    @csrf
                    <div class="form-group my-3 mx-3">
                        <label>Mjesto preuzimanja :</label>
                        <input name="pick_up_location" class="form-control" type="text">
                    </div>
                    <div class="form-group my-3 mx-3">
                        <label>Mjesto Vracanja :</label>
                        <input name="drop_off_location" class="form-control" type="text">
                    </div>
                    <div class="form-group my-3 mx-3">
                        <label>Datum Preuzimanja :</label>
                        <input name="pick_up_date" class="form-control" type="date">
                    </div>
                    <div class="form-group my-3 mx-3">
                        <label>Datum Vracanja :</label>
                        <input name="drop_off_date" class="form-control" type="date">
                    </div>
                    <div class="form-group my-3 mx-3">
                        <label>Vrijeme Preuzimanja:</label>
                        <input name="pick_up_time" class="form-control" type="time">
                    </div>
                    <div class="form-group my-3 mx-3">
                        <label>Vrijeme Vracanja:</label>
                        <input name="drop_off_time" class="form-control" type="time">          
                    </div>
                    <button type="submit" class=" my-3 mx-3 btn btn-primary">Potrazi vozilo</button>
                </form>
            </div>
                 
        </div>    
        </body>
</html>
