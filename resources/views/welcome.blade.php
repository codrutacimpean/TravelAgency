<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src ="https://kit.fontawesome.com/1969c0f2e0.js" crossorigin="anonymous"></script>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel = "stylesheet" href = "../resources/css/welcome.css">
        <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel = "stylesheet" href = "https://fontawesome.com/">
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet"> 
    </head>
    <body>
        <div id = "authenticatedUser">
            <nav class="navbar">
                <ul>
                    <li style = "float:left" ><a href = "{{ route('vacante.index') }}">Cimpean Codruta</a></li>
                    <li><a href = "{{ route('login') }}"><i class="fas fa-sign-in-alt"></i>Contul meu</a></li>
                    <li><a href = "{{ route('register') }}"><i class="fas fa-user-plus"></i>Autentificare</a></li>
                </ul>
            </nav>
        </div>
    <div class = "container1">
        <div class = "row"> 
            <div class = "col-lg-4-png">
                <h3 style = "margin-left:250px; text-align:center; font-family: cursive; font-style:italic;color:#000000;
                text-shadow: 2px 2px 4px  #e0b8cc">"Vacanta trebuie sa fie indeajuns de lunga ca seful tau sa iti simta lipsa , si indeajuns de scurta ca el sa nu observe ca se poate descurca si fara tine."
                </h3>
            </div>
            <div class = "row">
                <div class = "homeText" style = "padding:10px; margin-left:20px">
                    <h2 class = "titlehomeText" style ="margin-bottom:5px">De ce sa alegi agentia noastra?</h2>
                    <p><i class=  "fas fa-umbrella-beach"></i>Cu noi platesti mai putin.</p>
                    <p><i class=  "fas fa-umbrella-beach"></i>Ne gandim permanent la tine.</p>
                    <p><i class = "fas fa-umbrella-beach"></i>Cazare atent selectionata.</p>
                    <p><i class = "fas fa-umbrella-beach"></i>Sistem de rezervari online</p>
                    <p><i class = "fas fa-umbrella-beach"></i>Ghizi specializati si insotitori de grup cu experienta.</p>
                    <p><i class = "fas fa-umbrella-beach"></i>Asistenta turistica prietenoasa.</p>
                    <p><i class = "fas fa-umbrella-beach"></i>Transport de top.</p>
                </div>
            </div>
        </div>
        <div class = "row">
            <div class = "col-lg-4">
                <h2 class = "font-weight-bold">Oferta last minute!</h2>
                <p class = "descriptionImg" style = "margin-top:15px; color:#000000;
                text-shadow: 2px 2px 4px  #810c4d">Profita de ultimele reduceri și i-ați vacanțe ieftine. Rezerva online. Disponibilitate ridicata.</p>
                <img class = "img" src ="../public/img/last.png" alt = "lastMinute" width = "200px" height = "150px">
            </div>
            <div class = "col-lg-4">
                <h2 class = "font-weight-bold">Oferte early booking!</h2>
                <p class = "descriptionImg" style = "margin-top:15px;color:#000000;
                text-shadow: 2px 2px 4px  #810c4d">Reduceri Early Booking de pana la 60%.Plecari in perioada august - septembrie 2021; Taxe incluse in pret.</p>
                <img class = "img" src = "../public/img/earlybooking.jpg" alt = "earlyBooking" width = "200px" height = "150px">
            </div>
            <div class = "col-lg-4">
                <h2 class = "font-weight-bold">Oferte All Inclusive!</h2>
                <p class = "descriptionImg" style = "margin-top:15px;color:#000000;
                text-shadow: 2px 2px 4px  #810c4d">Cele mai bune oferte pentru sejur in 2021, atat pentru litoralul romanesc cat si pentru destinatii exotice! </p>
                <img class = "img" src = "../public/img/all.jpg" alt = "allInclusive" width = "200px" height = "150px">
            </div>
        </div>
    </div>
</body>
</html>
