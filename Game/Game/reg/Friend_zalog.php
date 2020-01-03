<?php 
require 'db.php';
if(isset($_POST['submit']))
 	{
 		
 		header("Location:Friend.php");
 		$errors = array();
 		if($_POST['Name'] == '')
 		{
 			$errors[] = 'NO name';
 		}
 		if($_POST['F'] == '')
 		{
 			$errors[] = 'NO Surname';
 		}
 		
 		if($_POST['Inst'] == '')
 		{
 			$errors[] = 'NO Inst';
 		}
 		if($_POST['Photo'] == '')
 		{
 			$errors[] = 'NO Photo';
 		}
 		if(empty($errors)){
 			//регистрация
 			$USSB = R::dispense($_SESSION['logged_user']->login);
 			$USSB->name = $_POST['Name'];
 			$USSB->f = $_POST['F'];
 			$USSB->ssinst = $_POST['Inst'];
 			$USSB->ssphoto = $_POST['Photo'];
 			$USSB->friend = 1;
 			 R::store($USSB);
 		}else{
 			
 		}
 	 }
  ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Бывшие</title>
</head>
<link rel="stylesheet" href="libs/style2.css">
<body>

	</div>
	
		<div class="imain">
			<form  method="POST">
				<div class="inst"><input type="text" name="Inst" class="instin" placeholder="Инста" >
				</div>
				<input type="text"  class="iinp photo" name="Photo" placeholder="Фотка">

<!--  Кнопка -->
		<button type="submit" name="submit" class="iinp ex" ></button>
<!-- Основная форма -->
		<div class=""> <input type="text"  name="Name" class="iinp i1" placeholder="Имя"></div>
		<div class=""><input type="text" name="F" class="iinp i12" placeholder="Фамилия"></div>
		
	
				
			</div>
		</form >

	<script src = "libs/jquery-3.3.1 (1).js"></script>
	<script src="libs/test.js"></script>
</body>
</html>