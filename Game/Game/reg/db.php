<?php


require "libs/rb.php";

$link = mysqli_connect('localhost','root','','playr');

 R::setup( 'mysql:host=localhost;dbname=playr',
        'root', '' );

  session_start();

 ?>