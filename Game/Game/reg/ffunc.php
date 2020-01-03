<?php 
function get_categories(){

global $link;

$log = mysqli_real_escape_string($link,$_SESSION['logged_user']->login);


$result = mysqli_query($link,"SELECT * FROM `$log` WHERE s = 'on'");

return $result;

}

 ?>