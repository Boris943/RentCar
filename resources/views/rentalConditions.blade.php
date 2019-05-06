<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    <div class="d-flex my-3">
        <h3>
            Uslovi Rentiranja
        </h3>
        <a href="/" class="btn btn-primary mx-3">Pocetna</a>
    </div>
    <div class="accordion" id="accordionExample">
            <div class="card bg-transparent border-light">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Starost Vozaca
                  </button>
                </h5>
              </div>
              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    Vozac mora biti punoletan to jest imati 18 ili vise god
                </div>
              </div>
            </div>

            <div class="card bg-transparent border-light">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Vozacka Dozvola
                  </button>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    U obavezi ste da dostavite na uvid validnu vozačku dozvolu, u posjedu najmanje 2 godine.
                </div>
              </div>
            </div>
            <div class="card bg-transparent border-light">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Placanje
                </button>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    Plaćanje možete izvršiti prilikom preuzimanja vozila. Plaćanje se vrši gotovinom ili kreditnim karticama. 
                </div>
              </div>
            </div>
          </div>

          <div class="card bg-transparent border ligth">
                <div class="card-header" id="heading4">
                  <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapseOne">
                      Osiguranje
                    </button>
                  </h5>
                </div>
            
                <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
                  <div class="card-body">
                        U cijenu rezervacije uključeni su kasko osiguranje, osiguranje putnika i trećih lica, čime se pokrivaju sve eventualne nezgode, krađa i medicinska njega putnika. 
                </div>
                </div>
              </div>
              
          <div class="card bg-transparent border ligth">
                <div class="card-header" id="heading5">
                  <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapseOne">
                     Prelazak Granice
                    </button>
                  </h5>
                </div>
            
                <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample">
                  <div class="card-body">
                    Prelazak granice u iznajmljenom vozilu je jedino moguć uz dozvolu rent a car kompanije. 
                  </div>
                </div>
              </div>
                  
          <div class="card bg-transparent border ligth">
                <div class="card-header" id="heading6">
                  <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapseOne">
                      Policijski zapisnik
                    </button>
                  </h5>
                </div>
            
                <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordionExample">
                  <div class="card-body">
                        Policijski zapisnik, u slučaju eventualne nezgode tokom perioda najma,
                         je neophodan, u suprotnom Klijent snosi sve troškove štete ili krađe.
                          Neophodno je podnijeti zapisnik, čak i u slučaju da je vozilo ogrebano. 
                        Molimo Vas da pozovete 122, u slučaju nezgode. 
                </div>
                </div>
              </div>
                      
          <div class="card bg-transparent border ligth">
                <div class="card-header" id="heading7">
                  <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="true" aria-controls="collapseOne">
                        Gorivo
                    </button>
                  </h5>
                </div>
            
                <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordionExample">
                  <div class="card-body">
                    Prilikom preuzimanja vozila, dobijate pun rezervoar, a u obavezi ste da vratite vozilo sa punim rezervoarom.
                </div>
                </div>
              </div>
                          
          <div class="card bg-transparent border ligth">
                <div class="card-header" id="heading8">
                  <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="true" aria-controls="collapseOne">
                      Depozit
                    </button>
                  </h5>
                </div>
            
                <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordionExample">
                  <div class="card-body">
                        Rent a car zahtijeva depozit u visini učešća u šteti, 
                        koji će biti aktiviran u slučaju da snosite odgovornost u saobraćajnoj nezgodi. 
                </div>
                </div>
              </div>

    <script src="{{ asset('js/app.js') }}" ></script>
</body>
</html>