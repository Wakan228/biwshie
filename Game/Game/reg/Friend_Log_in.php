
 <?php 
require "libs/rb.php";

$link = mysqli_connect('localhost','root','','playr');
require 'funcc.php';

// function get_categories(){

// global $link;

// $log = mysqli_real_escape_string($link,$_POST["login"]);


// $result = mysqli_query($link,"SELECT * FROM `$log`");

// $categories = mysqli_fetch_assoc($result);
// 	while($row = mysqli_fetch_assoc($result)){

// 		 echo '<a href="'.$row["ssinst"].'"><div class="kard" style="margin-top:50px"><span>'.$row["name"].'</span><img src="'.$row["ssphoto"].'" class="plas_all"alt=""></div></a>';
// 	}

// }


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
      <ul>

        <li><a href="test.php"><div class="h " name="fe">Girl</div></a></li>
                 <li><div class="h bt" >All</div></li>
         <form method="POST">
         <li>
          <input type="text" placeholder="Введите ник" class="h bj" name="login"></li>
         </form>
        <li><a href="log_aut.php"><div name="btn"class="h">Exit</div><a/></li>
      </ul>
		

		</header>

		<!--  Контент -->
<div class="allo">
<?php  
	foreach($categories as $category): 
			 $p++; ?> 

       <a href="<?=$category["ssinst"]?>"><div class="kard"><span><?=$category["name"]?></span>
         <img src="<?=$category["ssphoto"] ; ?>" class="plas_all"alt="">
      </div></a>


				  
		 <?php endforeach ;  ?>
  

 
 
</div>
<script src = "libs/jquery-3.3.1 (1).js"></script>
<script>
  p = 1
  $('.bt').click(function function_name(argument) {
  
      $('span').css("opacity", 1)

  })
  $('.kard').hover(function function_name(argument) {
    p++
    if(p % 2 == 0){
        $(this).find('span').css("opacity", 1)
  }
  if(p % 2 == 1){
        $(this).find('span').css("opacity", 0)
  }
  })
  

</script>
</body>
</html>