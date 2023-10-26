<?php
$lingua=$_GET['lingua'];
if($lingua!=''){
    if($lingua='BG'){
    header('location:index_bg.php');
       exit;
    }
}
?>
    <!DOCTYPE html>
    <html lang="it">

    <head>
        <title>Veronika Krasteva musicoterapeuta e violoncellista a Verona</title>
        <meta charset="utf-8">
		<meta name="description" content="Lezioni di violoncello e incontri di musicoterapia per bambini, anziani, BES e adulti in provincia di Verona o in modalità online condotti dal musicoterapeuta Veronika Krasteva">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="6mystylesheet.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
        <link rel="icon" href="https://i.imgur.com/IlOgCms.png/favicon.png">
        <link href='https://fonts.googleapis.com/css?family=Chilanka' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="alternate" hreflang="it-IT">
        <?php include 'gtm_head.php';?>
    </head>

    <body>
    <?php include 'gtm_body.php';?>
        <div class="container">
 <?php include 'menu.php';?>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Language	  
</a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="index.php?lingua=BG"> <span class="flag-icon flag-icon-bg"></span>Български</a>
                                <a class="dropdown-item" href="#it"><span class="flag-icon flag-icon-it"> </span>Italiano</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>



            <div class="header">
                <div class="row row2">
                    <div class="col-md-12">
                        <h1>Veronika Krasteva</h1>
                        <h2>Musicoterapeuta e Violoncellista</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="chisono.php" class="btn btn-dark "> Chi sono </a>
                    </div>
                </div>


                <div class="row row2">
                    <div class="col-md-8 col-xs-12">
                        <a href="contattami.php" class="btn btn-dark ">Contattami</a>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <p>
                            <a href="https://www.facebook.com/profile.php?id=100007002945824 " target="_blank " class="fb fa-facebook "></a>
                            <a href="https://twitter.com/VeronikaKrastev " target="_blank " class="fb fa-twitter "></a>
                            <a href="https://www.instagram.com/veronika_krasteva " target="_blank " class="fb fa-instagram "></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <h2>Lezioni di violoncello e incontri di musicoterapia in provincia di Verona</h2>
					<p>Lezioni private di <strong>violoncello e teoria musicale</strong> per ragazzi, adulti e bambini con qualsiasi livello di preparazione musicale.</p>
					<p> Incontri di <strong>musicoterapia</strong> per bambini, anziani, BES e adulti</p>
					<h5>DISPONIBILE ANCHE IN MODALITÀ <strong>ONLINE</strong></h5>
					
                    <a href="contattami.php" class="btn btn-outline-danger ">Contattami</a>
                </div>
                <div class="col-md-4 col-xs-12">
                    <img class="img imglez" src="https://i.imgur.com/7CxN4by.jpg" alt="Veronika Krasteva">
                </div>
            </div>

            <div class="row">
                <div class="col-md-5 col-xs-12">
                    <img class="img imgmusic" src="https://i.imgur.com/3ZNYCc7.jpg" alt="Musica per violoncello">

                </div>
                <div class="col-md-7 col-xs-12">
                    <h2>La mia musica</h2>
                    <p>Nel mio canale <b>Youtube</b> puoi trovare i tuoi preferitti pezzi e canzoni di diversi generi – <b> pop, rock, musica da film, Tv e anime.</b> Sono tutti suonati da me utilizzando il violoncello, la voce e diversi altri strumenti che uso nella musicoterapia. Acceto richieste, domande, sugerimenti.</p>
                    <a href="https://www.youtube.com/channel/UClPNgmg0EqaH7zUVQMgZzqw" target="_blank" class="btn btn-outline-danger ">Canale Youtube</a>
                </div>
            </div>



            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <h2>Cosa è la musicoterapia?</h2>
                    <p>La musicoterapia ofre un percorso di <b>cura e cambiamento</b> atraverso il linguaggio sonoro. Aiutando le Persone ad esprimere <b>emozioni</b>, a <b>stabilire relazioni care</b>, ad armonizzare il proprio <b>equilibrio psicofisico</b>.</p>
                    <a href="musicoterapia.php" class="btn btn-outline-danger ">Servizi di musicoterapia</a>
					
                </div>
                <div class="col-md-6 col-xs-12">
                    <img class="img imgmt" src="https://i.imgur.com/TRpBsd1.jpg" alt="Strumenti di musicoterapia">

                </div>
            </div>


            <div class="row">
                <div class="col-md-12 col-xs-12 text-center">
                    <h2>SERVIZI DI MUSICA E MUSICOTERAPIA</h2>
                </div>
                <div class="col-md-6 col-xs-12">
                    <h3>Musicoterapia</h3>
                    <h4>Bambini</h4>
                    <p>Apprendere, relazionarsi meglio e divertirsi con la musica.</p>
                    <h4>Anziani</h4>
                    <p>Stimolare la memoria, promuovere il movimento fisico e arricchire la sfera affettiva atraverso il canto, la danza e l’ascolto musicale.</p>
                    <h4>BES (DSA, ADHD, Autismo, ulteriori disabilità)</h4>
                    <p>Per il recupero e il mantenimento delle potenzialità psico-fisiche.</p>
                    <h4>Adulti</h4>
                    <p>Promuovere il benessere psicologico al lavoro e nella vita quotidiana.</p>
                </div>
                <div class="col-md-6 col-xs-12">
                    <h3>Musica</h3>
                    <h4>Lezioni di violoncello</h4>
                    <p>Lezioni private di VIOLONCELLO per ragazzi, adulti e bambini con qualsiasi livello di preparazione musicale.</p>
                    <h4>Lezioni di teoria musicale e solfeggio</h4>
                    <p>Preparazione all’esame di solfeggio previsto nei conservatori.</p>
                    <h4>Musica per matrimoni ed eventi</h4>
                    <p>Servizi musicali e intrattenimento per matrimoni, cerimonie e varie eventi.</p>
                </div>
            </div>




            <footer>

                <div class="row">
                    <div class="col-md-5">
                        <h5> Veronika Krasteva - Musicoterapeuta e Violoncellista </h5>
                    </div>

                    <div class="col-md-3">
                        <h5> Seguimi:</h5>
                        <p>
                            <a href="https://www.facebook.com/profile.php?id=100007002945824 " target="_blank " class="fa fa-facebook "></a>
                            <a href="https://twitter.com/VeronikaKrastev " target="_blank " class="fa fa-twitter "></a>
                            <a href="https://www.instagram.com/veronika_krasteva " target="_blank " class="fa fa-instagram "></a>
                        </p>
                        <p><button type="button " class="btn btn-outline-danger "><a href="https://www.youtube.com/channel/UClPNgmg0EqaH7zUVQMgZzqw " target="_blank "> Subscribe </a><i class="fa fa-youtube-play "></i></button>                      
						</p>
                    </div>

                    <div class="col-md-4">
                        <p><a href="mailto: veronika_krasteva95@abv"><i class="fb fa-envelope" >veronika_krasteva95@abv.bg</i></a></p>
						<p><a href="+393284757116"><i class="fb fa-phone" >+39 328 4757116</i></a></p>
						<p><a href="https://wa.me/+393284757116"><i class="fb fa-whatsapp" >+39 328 4757116</i></a></p>						
						<p><a href="skype:veronika.krasteva95?chat"><i class="fb fa-skype" >veronika.krasteva95</i></a></p>

                    </div>
                </div>
            </footer>


        </div>





















        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    </body>

    </html>