<?php 

function get_categories(){

global $link;

$log = mysqli_real_escape_string($link,$_SESSION['logged_user']->login);


$result = mysqli_query($link,"SELECT * FROM `$log`  WHERE friend = 0 ");

$categories = mysqli_fetch_all($result,1);

return $categories;
}

$categories = get_categories($link);