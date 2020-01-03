<?php 
require 'db.php';
if(isset($_POST['submit']))
 	{
 		
 		header("Location:test.php");
 		$errors = array();
 		if($_POST['Name'] == '')
 		{
 			$errors[] = 'NO name';
 		}
 		if($_POST['F'] == '')
 		{
 			$errors[] = 'NO Surname';
 		}
 		if($_POST['day'] == '')
 		{
 			$errors[] = 'NO day';
 		}
 		if($_POST['data'] == '')
 		{
 			$errors[] = 'NO data';
 		}
 		if($_POST['Val'] == '')
 		{
 			$errors[] = 'NO Value';
 		}
 		if($_POST['Inst'] == '')
 		{
 			$errors[] = 'NO Inst';
 		}
 		if($_POST['Photo'] == '')
 		{
 			$errors[] = 'NO Photo';
 		}
 	// 	if(mime_content_type($_POST['Photo']) != 'image/jpeg' ){
		// 	$errors[] = 'NO Photo';
		// }
 		if(empty($errors)){
 			//регистрация
 			$USSB = R::dispense($_SESSION['logged_user']->login);
 			$USSB->name = $_POST['Name'];
 			$USSB->f = $_POST['F'];
 			$USSB->day = $_POST['day'];
 			$USSB->data = $_POST['data'];
 			$USSB->s = $_POST['S'];
 			$USSB->value = $_POST['Val'];
 			$USSB->ssinst = $_POST['Inst'];
 			$USSB->ssphoto = $_POST['Photo'];
 			$USSB->friend = 0;
 			 R::store($USSB);
 		}else{
 			// echo "'<div style = "color : red;">'.array_shift($errors).'</div>'";
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
		<div class=""><input type="number" name="day" class="iinp i2"placeholder="Сколько встречаетесь (дни)?"></div>
		<div class=""><input type="text" name="data" class="iinp i3"placeholder="Дата встречи" ></div>
		<div class=""><input type="text"  class="iinp i4" placeholder="Был ли секс?" disabled><div class=""><input type="checkbox" name="S" class="iinp i42" placeholder="#" ></div></div>
				<div class=""><input type="number" name="Val"class="iinp i5" placeholder="Важность (0 - 9)" maxlength="1" max="9" min="0" ></div>
			</div>
		</form >

	<script src = "libs/jquery-3.3.1 (1).js"></script>
	<script src="libs/test.js"></script>
</body>
</html>