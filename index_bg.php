<?php
$lingua=$_GET['lingua'];
if($lingua!=''){
	if($lingua='IT'){
    header('location:index.php');
	  exit;
    }
}
?>
    <!DOCTYPE html>
    <html lang="bg">

    <head>
        <title>Вероника Кръстева – музикотерапевт и виолончелист</title>
        <meta charset="utf-8">
		<meta name="description" content="Уроци по виолончело за деца и възрастни и сесии по музикотерапия за деца със специални образователни потребности и възрастни с деменция, провеждани от Вероника Кръстева.">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="6mystylesheet.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
        <link rel="icon" href="https://i.imgur.com/IlOgCms.png/favicon.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="alternate" hreflang="bg-BG">
		<?php include 'gtm_head.php';?>
    </head>

    <body>
	    <?php include 'gtm_body.php';?>
        <div class="container">
 <?php include 'menu_bg.php';?>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Language	  
</a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#bg"> <span class="flag-icon flag-icon-bg"></span>Български</a>
                                <a class="dropdown-item" href="index_bg.php?lingua=IT"><span class="flag-icon flag-icon-it"> </span>Italiano</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>



            <div class="header">
                <div class="row row2">
                    <div class="col-md-12">
                        <h1>Вероника Кръстева</h1>
                        <h2>Музикотерапевт и Виолончелист</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="за-мен.php" class="btn btn-dark "> За мен </a>
                    </div>
                </div>


                <div class="row row2">
                    <div class="col-md-8 col-xs-12">
                        <a href="контакти.php" class="btn btn-dark ">Контакт </a>
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
                    <h2>Уроци по виолончело и сесии по музикотерапия </h2>
      			    <p>Частни уроци по <strong>виолончело и теория на музиката</strong> за деца и възрастни с всякакво ниво на музикална подготовка.</p>
					<p>Сесии по <strong>музикотерапия</strong> за деца със специални образователни потребности и възрастни с деменция и алцхаймер.</p>
					<h5>На място или Онлайн</h5>
                    <a href="контакти.php" class="btn btn-outline-danger ">СВЪРЖИ СЕ С МЕН </a>
                </div>
                <div class="col-md-4 col-xs-12">
                    <img class="img imglez" src="https://i.imgur.com/7CxN4by.jpg">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <img class="img imgmusic" src="https://i.imgur.com/3ZNYCc7.jpg">

                </div>
                <div class="col-md-6 col-xs-12">
                    <h2>Музика</h2>
                    <p>В моят канал <b>Youtube</b> можете да намерите вашите любими песни и парчета.<b> Поп, рок, музика от филми и анимета</b> - всичко е тук. Приемам поръчки, въпроси, съвети.</p>
                    <a href="https://www.youtube.com/channel/UClPNgmg0EqaH7zUVQMgZzqw" target="_blank" class="btn btn-outline-danger ">Youtube</a>
                </div>
            </div>



            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <h2>Какво е музикотерапия?</h2>
                    <p><strong>Използване на музиката за терапевтични цели и лечение.</strong> </p>
					<p>Музикотерапията помага на хората да <b>изразяват и контролират емоциите си</b>, да подобрят <b>комуникативните си умения</b>, да възстановят <b>вътрешният си  баланс</b> и <b>развият личния потенциал</b>.</p>
                    <a href="музикотерапия.php" class="btn btn-outline-danger ">Сесии по музикотерапия </a>
                </div>
                <div class="col-md-6 col-xs-12">
                    <img class="img imgmt" src="https://i.imgur.com/TRpBsd1.jpg">

                </div>
            </div>


            <div class="row">
                <div class="col-md-12 col-xs-12 text-center">
                    <h2>Услуги - музика и музикотерапия</h2>
                </div>
                <div class="col-md-6 col-xs-12">
                    <h3>Музикотерапия</h3>
                    <h4>Деца</h4>
                    <p>Насърчава детската активност и самостоятелност, стимулира психомоторното развитие, оказва влияние върху социалните и комуникативни умения, фината и общата моторика, слуховата и зрителната памет и т.н. </p>
                    <h4>Деца със специални образователни потребности </h4>
                    <p>За възстановяване и поддържане на психо-физическият потенциал.</p>
					<h4>Възрастни хора с деменция и алцхаймер</h4>
					<p>Стимулиране на паметта и насърчаване на физическото движение чрез пеене, танци, свирене и слушане на музика. </p>  
                    <h4>Възрастни</h4>
                    <p>Подобрява физическото и психическо благосъстояние на работното място и в ежедневието.</p>
                </div>
                <div class="col-md-6 col-xs-12">
                    <h3>Музика</h3>
                    <h4>Уроци по виолончело</h4>
                    <p>Частни уроци по ВИОЛОНЧЕЛО за деца и възрастни с всякакво ниво на музикална подготовка.</p>
                    <h4>Уроци по солфеж и теория на музиката</h4>
                    <p>Подготовка за приемните изпити в музикални гимназии и академията.</p>
                    <h4>Свадби и тържества</h4>
                    <p>Музикални и развлекателни услуги за сватби, церемонии и различни събития.</p>
                </div>
            </div>




            <footer>

                <div class="row">
                    <div class="col-md-5">
                        <h5> Вероника Кръстева - Музикотерапевт и Виолончелист </h5>
                    </div>

                    <div class="col-md-3">
                        <h5> Следвай ме:</h5>
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