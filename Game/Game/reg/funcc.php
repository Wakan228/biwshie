<?php 

function get_categories(){

global $link;

global $log ;



$log = mysqli_real_escape_string($link,$_POST['login']);


$result = mysqli_query($link,"SELECT * FROM `$log`");


$categories = mysqli_fetch_all($result,1);

return $categories;

}

$categories = get_categories($link);