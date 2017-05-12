<?php
require 'email.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ludmiła Kierczak - kierownik produkcji">
    <meta name="author" content="">

    <title>Ludmiła Kierczak - kierownik produkcji</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC|Lato|Raleway" rel="stylesheet">

        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700|Proza+Libre:400,500,800" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-default navbar-fixed-top topnav">
        <div class="container topnav">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="#"><i class="fa fa-home fa-2x"></i></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#omnie">O mnie</a>
                    </li>
                    <li>
                        <a href="#kontakt">Kontakt</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="intro-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Ludmiła Kierczak</h1>
                        <h3>Asystent produkcji / Kierownik produkcji</h3>
                        <hr class="intro-divider">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="omnie">
        <a name="omnie"></a>
        <div class="content-section-a">
         <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
<h2 class="text-center">O MNIE</h2>
                    <hr class="intro-divider">
         </div>
        
 <div class="row">
      <div class="col-lg-2 col-sm-2 text-center">
          <img src="img/aboutme.jpg" class="cvphoto">
          </div>
 <div class="col-lg-10 col-sm-10 text-center">
<p>Ukończyłam studia w PWSFTviT w Łodzi na kierunku Organizacja produkcji filmowej i telewizyjnej oraz Program Script w Szkole Wajdy. Prowadzę firmę Lukier Ludmiła Kierczak.

Doświadczenie zawodowe zdobywałam podczas produkcji filmów krótkometrażowych oraz w roli kierownika produkcji teledysków i asystenta produkcji reklam. Pełniłam również funkcję drugiego reżysera pełnometrażowego filmu “W spirali” w reżyserii Konrada Aksinowicza.
Współpracowałam podczas produkcji słuchowiska „Kim jest Max Winckler?” jako koordynator produkcji oraz konsultant scenariusza. 

Obecnie pracuję jako asystent producenta w okresie developmentu pełnometrażowych filmów fabularnych oraz jako asystent produkcji. 
</p>
</div>
<div class="col-lg-12 col-sm-12 text-center">
<a href="http://www.filmpolski.pl/fp/index.php?osoba=11121901" class="btn btn-default" role="button" target="_blank">Mój profil na filmpolski.pl</a>
</div>

        </div>
        </div>
        </div>
        </div>
    </section>

  
  <section class="kontakt">
        <a  name="kontakt"></a>
    <div class="content-section-b">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="row">
                    <h2>KONTAKT</h2>
                   <hr class="intro-divider">
                    <div class="row">
                        
                        <div class="col-lg-12 text-center" id="form">
                            <h3>Zapraszam do kontaktu:</h3>
                            <?php if (!empty($msg)) {
                                echo "<h5 class='text-center'>$msg</h5>";
                            } ?>
                            <form method="post" class="form-horizontal">
                                <div class="form-group">
                                    <label for="name">Imię i nazwisko</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Adres e-mail</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>

                                <div class="form-group">
                                    <label for="textarea">Wiadomość</label>
                                    <textarea class="form-control" id="textarea" rows="8" name="message"></textarea>
                                </div>

                                <div class="form-group">
                                    <button type="submit" name="send-email" class="btn btn-default"  btn-lg">Wyślij</button>
                                
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>

    <div class="banner"></div>
    <section class="modal-footer">

                   <p class="copyright text-muted small text-center">&copy; Ludmiła Kierczak 2017</p>
                    <p class="text-muted small text-center">Page by  <a href="http://nataliak.cz/" target="_blank">nataliak</a></p>


    </section>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
