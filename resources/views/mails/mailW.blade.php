<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail upozorenja</title>
</head>
<body>
    <h1>{{$req->full_name}} i dalje nije vratio auto kontaktiraj policiju ili korisnika rentiranog vozila!!! 
        Da izmiri svoje obaveze.
    Mozete ga kontaktirati koristeci sledece kontakte
    Email :: {{$req->email}}
    BR telefona :: {{$req->phone_num}}
    </h1>
</body>
</html>