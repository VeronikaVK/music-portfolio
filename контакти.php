<?php
$lingua=$_GET['lingua'];
if($lingua!=''){
	if($lingua='IT'){
    header('location:contattami.php');
	  exit;
    }
}
?>


<!DOCTYPE html>
<html lang="bg">

<head>
    <title>Контакти - Вероника Кръстева</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="6mystylesheet.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
    <link rel="icon" href="https://i.imgur.com/IlOgCms.png/favicon.png">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script  src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
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
                    <a class="dropdown-item" href="контакти.php?lingua=IT"><span class="flag-icon flag-icon-it"> </span>Italiano</a>
                </div>
				</li>
                </ul>
            </div>
        </nav>
		
		
		
		
		<div class="header">
            <div class="row row2">
                <div class="col-md-12">
                    <h1>Свържи се с мен</h1>
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
			
		
		
		<script>
 $(document).ready(function() {
   $("#modulo").validate({
     rules: {
       nome: {
         required: true,
         minlength: 3
       },
	   cognome : {
                required : true,               
                minlength : 4
			  },
email : {
                required : true,
                email : true,
				 minlength : 6
            },	
text : {        
required : true,       
                minlength : 10
            }			
     },
     messages: {
       nome: {
         required: "Въведете име на потребителя",
         minlength: "Името на потребителя трябва да съдържа минимум 3 символа"
       },
	    cognome: {
				required:"Въведете фамилия на потребителя",
				 minlength:"Фамилията на потребителя трябва да съдържа минимум 4 символа"
			},
			 email: {
				 required:"Въведете имейл",
				 email:"Въведете валиден имейл",
				 minlength:"Имейлът на потребителя трябва да съдържа минимум 6 символа"
			},
			text : {
				required:"Въведете съобщение",
				minlength:"Съобщението трябва да съдържа минимум 10 символа"
							 },
     },
     submitHandler: function() {
       //associo variabili
       var nome = $("#nome").val();
       var cognome = $("#cognome").val();
       var email = $("#email").val();
       var text = $("#text").val();

       //chiamata ajax
       $.ajax({

         //imposto il tipo di invio dati (GET O POST)
         type: "POST",

         //Dove devo inviare i dati recuperati dal form?
         url: "send.php",

         //Quali dati devo inviare?
         data: "nome=" + nome + "&cognome=" + cognome + "&email=" + email + "&text=" + text,
         dataType: "html",

         //Inizio visualizzazione errori
         success: function(response) {
           confirm("Съобщението е изпратено успешно. Към начало. ");
           location.replace("/index_bg.php");
         },
         error: function() {
           alert("Съобщението е изпратено НЕуспешно. Моля опитайте отново."); //sempre meglio impostare una callback in caso di fallimento
         }
       });
     }
   });
 });
</script>
		
		
		
		
		
         <div class="row">
            
                       <div class="col-xs-12 col-md-8 d-flex align-items-center justify-content-center">
    <form id="modulo"name="modulo">
	<div class="form-group">
		<label for="name" class="col-sm-4 control-label">Име</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="nome" name="nome" placeholder="Име">
		</div>
	</div>
		<div class="form-group">
		<label for="name" class="col-sm-4 control-label">Фамилия</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="cognome" name="cognome" placeholder="Фамилия">
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-sm-4 control-label">E-mail</label>
		<div class="col-sm-10">
			<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com">
			
		</div>
	</div>
	<div class="form-group">
		<label for="message" class="col-sm-4 control-label">Съобщение</label>
		<div class="col-sm-10">
			<textarea class="form-control" type="text" name="text" id="text"></textarea>
			
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<input id="submit" name="submit" type="submit" value="Изпрати" class="btn btn-primary">
		</div>
	</div>

</form> 
            </div>
            <div class="col-xs-12 col-md-4">
			
	                    <p><a href="mailto: veronika_krasteva95@abv"><i class="fd fa-envelope" >veronika_krasteva95@abv.bg</i></a></p>
						<p><a href="+393284757116"><i class="fd fa-phone" >+39 328 4757116</i></a></p>
						<p><a href="https://wa.me/+393284757116"><i class="fd fa-whatsapp" >+39 328 4757116</i></a></p>						
						<p><a href="skype:veronika.krasteva95?chat"><i class="fd fa-skype" >veronika.krasteva95</i></a></p>		
    
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















  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>