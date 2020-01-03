<?php 
 	require 'db.php';
 	require 'func.php';
  


 	if(isset($_SESSION['logged_user']));
 $USS = $_SESSION['logged_user']->login;
 	$data = $_POST;
 	
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title rel="shortcut icon" href="img/58c19acfcce7715ab444bbdf.ico" type="image/x-icon" >Бывшие</title>
</head>
<link rel="stylesheet" href="libs\style2.css">
<body> 
	<div class="main">

		<header class = "header">
      <ul class="hea">
        <li><a href="Friend.php"><div name="btn"class="h">Friend</div><a/></li>
         <li><div class="h solo">All</div></li>
        <li><a href="Log_in.php"><div class="h " name="fe">New</div></a></li>
        
        <li><a href="log_aut.php"><div name="btn"class="h">Exit</div><a/></li>
      </ul>
		

		</header>

		<!--  Контент -->
<div class="allo">
 
 <?php
 	$p = 0;
 	 if ($user){
 	 
 	 }else{
 	 	
 	 }
		  foreach($categories as $category): 
			 $p++; ?> 
				<div class="img new ">
					<a href="<?=$category["ssinst"]?>" class="sd">
						<img class ="imgs"src="<?=$category["ssphoto"] ; ?>" alt="">
					</a>
					
					<div class="mainnew">
						<div class="mn k1 f" >
							<?=$category["name"]?>
						</div>
						<div class="mn k2 f">
							<?=$category["f"]?>
						</div> 
						<div class="mn k3 f" style="width:<?=$category["day"]?>px">
							<img class="lo"src="img/lo.png">
							<div class="daaa"><?=$category["day"]?></div>
						</div>
						<div class="mn k5 f">
							<div class="c">
						<?=$category["data"]?>
						</div>
						</div>
						<div class="mn k4 f">
							<div class="s"><?=$category["s"]?></div>
							<img class="lo1"src="img/hhh.png">
						</div>
						<div class="mn k6 f">
							<div  style = "display: none "class="vb" ><?=$category["value"]?></div>
							<div class="sm" >
								<img class="lo2 c1" src="img/cmm7.png" alt="">
								<img class="lo2 c2" src="img/cmm2.png" alt="">
								<img class="lo2 c3" src="img/cmm6.png" alt="">
								<img class="lo2 c4" src="img/cmm8.png" alt="">
								<img class="lo2 c5" src="img/cmm3.png" alt="">
								<img class="lo2 c6" src="img/cmm5.png" alt="">
								<img class="lo2 c7" src="img/cmm4.png" alt="">
								<img class="lo2 c8" src="img/c0.png" alt="">
								<img class="lo2 c9" src="img/cl.png" alt="">
								<img class="lo2 c10" src="img/cmm9.png" alt="">
							</div>
							
						</div>
					</div>
				</div>

		 <?php endforeach ;  ?>


</div>


<script src = "libs/jquery-3.3.1 (1).js"></script>
 <script>
 	$('.img').hover(function(){
 	$(this).find('.k1').fadeIn(1)
   $(this).find('.k2').fadeIn(1)
   $(this).find('.k3').fadeIn(1)
   $(this).find('.k4').fadeIn(1)
   $(this).find('.k5').fadeIn(1)
   $(this).find('.k6').fadeIn(1)
    $(this).find('.k1').css('left',130 +'%').width(150+'px').css('top',-45+'px')
    $(this).find('.k2').css('top',40 +'px').css('left',210 +'%').width(250+'px')
    $(this).find('.k3').css('top',-3 +'px').css('left',330 +'%')
    $(this).find('.k4').css('top',109 +'px').css('left',120 +'%')
    $(this).find('.k5').css('left',510 +'%').css('top',205 + '%').width(165+'px')
    $(this).find('.k6').css('left',750 +'%').css('top',257 + '%').css('width',200 + 'px')
    if($(this).find('.s').text() != "on"){
    	$(this).find('.lo1').css("display","none")
    }


     if($(this).find('.vb').text() == "0"){
     	$(this).find('.k6').css("display","none")

    }
     if($(this).find('.vb').text() == "1"){
    	$(this).find('.c1').css("display","block")
    	$(this).find('.k6').css('width',12.5 + 'px')

    }

    if($(this).find('.vb').text() == "2"){
    	$(this).find('.c1').css("display","block")
    	$(this).find('.c2').css("display","block")
    	$(this).find('.k6').css('width',45 + 'px')

    }
     if($(this).find('.vb').text() == "3"){
    	$(this).find('.c1').css("display","block")
    	$(this).find('.c2').css("display","block")
    	$(this).find('.c3').css("display","block")
    	$(this).find('.k6').css('width',80 + 'px')
    }
     if($(this).find('.vb').text() == "4"){
    	$(this).find('.c1').css("display","block")
    	$(this).find('.c2').css("display","block")
    	$(this).find('.c3').css("display","block")
    	$(this).find('.c4').css("display","block")
    	$(this).find('.k6').css('width',115 + 'px')
    }
     if($(this).find('.vb').text() == "5"){
    	$(this).find('.c1').css("display","block")
    	$(this).find('.c2').css("display","block")
    	$(this).find('.c3').css("display","block")
    	$(this).find('.c4').css("display","block")
    	$(this).find('.c5').css("display","block")
    	$(this).find('.k6').css('width',150 + 'px')
    }
     if($(this).find('.vb').text() == "6"){
    	$(this).find('.c1').css("display","block")
    	$(this).find('.c2').css("display","block")
    	$(this).find('.c3').css("display","block")
    	$(this).find('.c4').css("display","block")
    	$(this).find('.c5').css("display","block")
    	$(this).find('.c6').css("display","block")
    	$(this).find('.k6').css('width',182.5 + 'px')
    }
     if($(this).find('.vb').text() == "7"){
    	$(this).find('.c1').css("display","block")
    	$(this).find('.c2').css("display","block")
    	$(this).find('.c3').css("display","block")
    	$(this).find('.c4').css("display","block")
    	$(this).find('.c5').css("display","block")
    	$(this).find('.c6').css("display","block")
    	$(this).find('.c7').css("display","block")
    	$(this).find('.k6').css('width',220 + 'px')
    }
     if($(this).find('.vb').text() == "8"){
    	$(this).find('.c1').css("display","block")
    	$(this).find('.c2').css("display","block")
    	$(this).find('.c3').css("display","block")
    	$(this).find('.c4').css("display","block")
    	$(this).find('.c5').css("display","block")
    	$(this).find('.c6').css("display","block")
    	$(this).find('.c7').css("display","block")
    	$(this).find('.c8').css("display","block")
    	$(this).find('.k6').css('width',255 + 'px')
    }
     if($(this).find('.vb').text() == "9"){
    	$(this).find('.c1').css("display","block")
    	$(this).find('.c2').css("display","block")
    	$(this).find('.c3').css("display","block")
    	$(this).find('.c4').css("display","block")
    	$(this).find('.c5').css("display","block")
    	$(this).find('.c6').css("display","block")
    	$(this).find('.c7').css("display","block")
    	$(this).find('.c8').css("display","block")
    	$(this).find('.c9').css("display","block")
    	$(this).find('.k6').css('width',290 + 'px')
    }

    },function(){
   $(this).find('.k1').css('left',1+'%').css('width',1+'px')
   $(this).find('.k2').css('left',1+'%').css('width',1+'px')
  $(this).find('.k3').css('left',1100+'%')
  $(this).find('.k4').css('left',1+'%')
  $(this).find('.k5').css('left',1100+'%').width(145+'px')
  $(this).find('.k6').css('left',1100+'%')
   $(this).find('.k1').fadeOut(400)
  $(this).find('.k2').fadeOut(400)
  $(this).find('.k3').fadeOut(400)
  $(this).find('.k4').fadeOut(400)
  $(this).find('.k5').fadeOut(400)
  $(this).find('.k6').fadeOut(400)
})
 	var i = 1;

 	$('.solo').click(function(){
 		i++
 		if(i % 2 == 0){
 	$('.img').find('.k1').fadeIn(1)
   $('.img').find('.k2').fadeIn(1)
   $('.img').find('.k3').fadeIn(1)
   $('.img').find('.k4').fadeIn(1)
   $('.img').find('.k5').fadeIn(1)
   $('.img').find('.k6').fadeIn(1)
    $('.img').find('.k1').css('left',130 +'%').width(150+'px').css('top',-45+'px')
    $('.img').find('.k2').css('top',40 +'px').css('left',210 +'%').width(250+'px')
    $('.img').find('.k3').css('top',-3 +'px').css('left',330 +'%')
    $('.img').find('.k4').css('top',109 +'px').css('left',120 +'%')
    $('.img').find('.k5').css('left',510 +'%').css('top',205 + '%').width(165+'px')
    $('.img').find('.k6').css('left',750 +'%').css('top',257 + '%')

 	}else{
 	 $('.img').find('.k1').css('left',1+'%').css('width',1+'px')
   $('.img').find('.k2').css('left',1+'%').css('width',1+'px')
  $('.img').find('.k3').css('left',1100+'%')
  $('.img').find('.k4').css('left',1+'%')
  $('.img').find('.k5').css('left',1100+'%').width(200+'px')
  $('.img').find('.k6').css('left',1100+'%')
   $('.img').find('.k1').fadeOut(400)
  $('.img').find('.k2').fadeOut(400)
  $('.img').find('.k3').fadeOut(400)
  $('.img').find('.k4').fadeOut(400)
  $('.img').find('.k5').fadeOut(400)
  $('.img').find('.k6').fadeOut(400)
 	}
 	})
 	
 </script>
 <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
		<!-- Контент -->
 
</body>
</html>