<?php 
require 'db.php';

$data = $POST;
if(isset($_POST['subbb'])){
	header("Location:R.php");
}

if( isset($_POST['submit']) )
{
	// здесь регистрация


	// ошибка при не заполнениии поля

	$errors = array();
	if(trim($_POST['login']) == '')
	{
		$errors[] = 'Введите логин!';
	}

	if(trim($_POST['email']) == '')
	{
		$errors[] = 'Введите Email!';
	}

	if($_POST['password'] == '')
	{
		$errors[] = 'Введите Пароль!';
	}

	if($_POST['password_2'] != $_POST['password'])
	{
		$errors[] = 'Повторный пароль введён не верно!';

	}
	if(R::count('users', 'login = ? ', array($_POST['login'])) > 0)
	{
		$errors[] = 'Пользователь с таким логином уже существует';
	}
	if(R::count('users', 'email = ? ', array($_POST['email'])) > 0)
	{
		$errors[] = 'Пользователь с таким email уже существует';
	}

	if($_POST['password_2'] == '')
	{
		$errors[] = 'Введите повторный пароль !';

	}

	if( empty($errors))
	{
		//всё хорошо , можно зарегестрировать
		$user = R::dispense('users');
		$user->login = $_POST['login'];
		$user->email = $_POST['email'];
		$user->password = password_hash($_POST['password'] , PASSWORD_DEFAULT);
		R::store($user);
		// $USSB = R::dispense($_POST['login']);
		// R::store($USSB);
	

		header("Location:R.php");
	}else{
		echo '<div style = "color :white;" >'.array_shift($errors).'</div>';
	}
}

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Регистрация</title>
 </head>
 <link rel="stylesheet" href="libs/style.css">
 <body>


 <form action="signup.php" method="POST">
 	
<div class="form">
	
 	<p>
 		
 		<input placeholder="Ник" type="text" name="login" value="<?php echo @$_POST['login'];?>">
 	</p>
	
 	<p>
 		
 		<input placeholder="Email" type="email" name="email" value="<?php echo @$_POST['email'];?>">
 	</p>

 	<p>
 		
 		<input placeholder="Пароль"type="password" name="password" value="<?php echo @$data['password'];?>">
 	</p>

 	<p>
 		
 		<input placeholder="Повторите пароль" type="password" name="password_2" value="<?php echo @$data['password_2'];?>">
 	</p>
		<div class="btn">
		 	 <p>
		 		<button class="btn1" type="submit" name="submit">Зарегистрироваться</button>
		 	</p>

		 	<p>	
		 			<button  class="btn2" name="subbb" >Меню</button>
		 	</p>

		 </div>
 	</div>

 </form>

  </body>
 </html>
