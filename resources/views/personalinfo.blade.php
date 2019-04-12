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
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
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

       <div class="card">
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
                
            <button type="submit" class="my-3 btn btn-success form-control"> Snimi zahtjev u DB</button>    
            
        </form>
       </div>
</div>
</body>
</html>

