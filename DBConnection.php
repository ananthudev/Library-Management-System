<?php
//Establishing connection with the database
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'books'); //where books is the database name
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>

<!--Pinne phpmyadminil poyi, oru database create cheyanam books enna data base, athinte sql query njn ithine koode attach cheythit unde -->
<!-- allenkil sql file tharam import cheythal mathi -->
<!-- enthenkilum doubt undenkil anjana missinodo ennodo, chodichal mathi -->