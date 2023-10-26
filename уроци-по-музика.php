<?php
$lingua=$_GET['lingua'];
if($lingua!=''){
	if($lingua='IT'){
    header('location:lezioni-di-musica.php');
	  exit;
    }
}
?>

<!DOCTYPE html>
<html lang="bg">

<head>
    <title>Уроци по виолончело и теория на музиката</title>
    <meta charset="utf-8">
	<meta name="description" content="Уроци по виолончело и теория на музиката за деца и възрастни с всякакво ниво на музикална подготовка, провеждани от Вероника Кръстева.">
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
                    <a class="dropdown-item" href="уроци-по-музика.php?lingua=IT"><span class="flag-icon flag-icon-it"> </span>Italiano</a>
                </div>
				</li>
                </ul>
            </div>
        </nav>
		
		
		
        <div class="header">
            <div class="row row2">
                <div class="col-md-12">
                    <h1>Уроци по виолончело и теория на музиката</h1>					
                </div>   
</div>				
            <div class="row row2">     			
			 <div class="col-md-12 text-right">
                    
                        <a href="https://www.facebook.com/profile.php?id=100007002945824 " target="_blank " class="fb fa-facebook "></a>
                        <a href="https://twitter.com/VeronikaKrastev " target="_blank " class="fb fa-twitter "></a>
                        <a href="https://www.instagram.com/veronika_krasteva " target="_blank " class="fb fa-instagram "></a>
                  
                </div>
				</div>
			</div>
			
			
	        
		
	
			
			<div class="row">
            <div class="col-md-12 col-xs-12 text-center">
                <h3>За кой е предназначено?</h3>	
			</div>	
				<div class="col-md-12 col-xs-12">
				<p> Услугата е насочена към <b>деца и възрастни</b> с всякакво ниво на музикална подготовка. Всеки, който иска да влезе в света на музиката и да се научи да свири на един прекрасен инструмент като <b>виолончелото.</b></p>
            </div>
			</div>
	 <div class="row">   
<div class="col-md-12 col-xs-12 text-center">
<h3> Мeтод</h3>	
</div> 
            <div class="col-md-6 col-xs-12">
                <h4>Уроци по виолончело</h4>
                <p>Частни уроци по ВИОЛОНЧЕЛО за деца и възрастни с всякакво ниво на музикална подготовка.</p>
				
				</div>	
				<div class="col-md-6 col-xs-12">
                <h4>Уроци по солфеж и теория на музиката</h4>               
				<p>Подготовка за приемните изпити по солфеж и теория на музиката в музикални гимназии и академията.</p>
				
				</div>
	       
             	
		<div class="col-md-4 col-xs-12">
		<i class="fc fa-clock-o" aria-hidden="true">Продължителност една среща: 1 час</i>
		</div>
		<div class="col-md-4 col-xs-12">
		<i class="fc fa-map-marker" aria-hidden="true">Тип на среща: Онлайн</i>
		</div>
		<div class="col-md-4 col-xs-12 text-center">
                    <a href="контакти.php" class="btn btn-outline-danger ">Свържи се с мен за повече информация </a>
                </div>
	</div>
		
		

		
		
		
		
 <footer>

            <div class="row">
                <div class="col-md-5">
                    <h5> Вероника Кръстева - Музикотерапевт и Виолончелист </h5>
                </div>
                
                <div class="col-md-3">
                    <h5> Следвай ме::</h5>
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
		
		