<?php 
require 'db.php';
// кнопка Регистрации
if(isset($_POST['submit'])){
	header('Location:signup.php');
	
}
// кнопка входа в сайт
if(isset($_POST['do_login']));
{
	$errors = array() ;
	$user = R::findOne('users','login = ?', array($_POST['login']));

	// Проверка на логин
	if($user){
		// Проверка на email
		if($_POST['email'] == $user->email){
			//Проверна пароля
			if(password_verify($_POST['password'] , $user->password)){
				// логиним пользователя
					$_SESSION['logged_user'] = $user;
					header("Location:test.php");
			}else{
				$errors[] = 'Введите пароль';
			}
		}else{
			$errors[] = 'Введите email';
		}
	}else{
		$errors[] = 'Пользователь с таким логином не найден';
	}
	// 	if(!empty($errors)){
	// echo '<div style = "color : red;">'.array_shift($errors).'</div>';
}
	
	// Вывод ошибок


 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Вход</title>
</head>
<link rel="stylesheet" href="libs/style1.css">
<body>
	
<form action="R.php" method="POST">
 	<div class="form">
 	<p>		
 		<input placeholder="Ник" type="text" name="login" value="<?php echo @$_POST['login'];?>">
 	</p>
 	<p>		
 		<input placeholder="Email" type="email" name="email" value="<?php echo @$_POST['email'];?>">
 	</p>

 	<p>
 		<input placeholder="Пароль" type="password" name="password" value="<?php echo @$data['password'];?>">
 	</p>
	<div class="btn">
 	 <p>
 		<button type="submit" class="btn1" name="do_login">Войти</button>
 	</p>
		<p>
			<button type="submit" class="btn2" name="submit">Регистрация</button>
 		
 	</p>
 	</div>
</form>
<br>
</div>
</body>
</html>
