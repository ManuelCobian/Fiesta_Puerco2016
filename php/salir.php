<?php 
session_start();

session_destroy();

echo "<H1> A SALIDO</H1>";
header("location:../index.php");

 ?>